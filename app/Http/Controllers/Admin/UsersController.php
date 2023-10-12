<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UsersController extends Controller
{
    public function create()
    {
        $roles = Role::get();
        return view('admin.Users.create', ['roles' => $roles]);
    }
    public function index()
    {
        return view('admin.Users.index');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'user_type' => 'required|max:255',
            'password' => 'required|max:255',
            'mobile' => 'required|max:255',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password Number is required',
            'mobile.required' => 'Mobile Number is required',
        ]);
        $user  = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->user_type = $request->input('user_type');
        $user->password = bcrypt($request->input('password'));
        $user->mobile = $request->input('mobile');

        if ($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/user_images/', $filename);
            $user->profile_photo_path = $filename;
        }
        $roles = $request['roles'];
        if (isset($roles)) {
            // dd($roles);
            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r); //Assigning role to user
            }
        }
        $user->save();
        return redirect(route('user.index'))->with('message', 'User has been added successfully');
    }

    public function user_list(Request $request)
    {
        $query = User::select('users.*');
        if ($request->ajax()) {
            if (!empty($request->input('filter_option'))) {
                $user_type = $request->input('filter_option');
                $query->where('users.user_type', $user_type);
            }

            if (!empty($request->input('user_status'))) {
                $user_status = $request->input('user_status');
                $query->where('users.user_status', $user_status);
            }
   
            if (!empty($request->input('searchInput'))) {
                $searchInput = $request->input('searchInput');
                $query->where(function ($q) use ($searchInput) {
                    $q->where('name', 'like', '%' . $searchInput . '%')
                        ->orWhere('email', 'like', '%' . $searchInput . '%')
                        ->orWhere('user_type', 'like', '%' . $searchInput . '%') 
                        ->orWhere('mobile', 'like', '%' . $searchInput . '%');
                });
            }
            return DataTables::eloquent($query)
                ->addIndexColumn()
                ->addColumn('DT_RowIndex', function ($row) {
                    return '';
                })
                ->addColumn('user_status', function ($row) {
                    $status = $row->user_status ? $row->user_status : 'N/A';
                    $classes = '';
                    switch ($row->user_status) {
                        case 'Pending':
                            $classes = 'rounded-100 py-4 px-10 text-center text-14 fw-500 bg-primary text-white';
                            break;
                        case 'InActive': 
                            $classes = 'rounded-100 py-4 px-10 text-center text-14 fw-500 bg-danger text-white';
                            break;
                        case 'Active':
                            $classes = 'rounded-100 py-4 px-10 text-center text-14 fw-500 bg-success text-white';
                            break;
                        default:
                            break;
                    }
                    return '<td><span class="' . $classes . '">' . $status . '</span></td>';
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '
                    <div class="row x-gap-10 y-gap-10 items-center">
                    <a href="' . route('user.edit', $row->id) . '" class="flex-center bg-light-2 rounded-4 size-35">
                    <i class="icon-edit text-16 text-light-1"></i>
                    </a>
                    <button class="flex-center bg-light-2 rounded-4 size-35 deleteUser" data-id="' . $row->id . '">
                    <i class="icon-trash-2 text-16 text-light-1"></i>
                    </button>
                    </div>
                     ';
                    return $actionBtn;
                })
                ->editColumn('profile_photo_path', function ($row) {

                    $imagePath = '/uploads/user_images/' . $row->profile_photo_path;
                    if (!empty($row->profile_photo_path)) {
                        $imageHtml = '<img src="' . asset($imagePath) . '" width="100px" height="80px" alt="image"/>';
                    } else {
                        $imageHtml = 'N/A';
                    }
                    return $imageHtml;
                })
                ->rawColumns(['action','profile_photo_path','user_status'])
                ->make(true);
        }
    }

    public function edit($id){
        $roles = Role::get();
        if (empty(trim($id)) or !is_numeric($id)) {
            return redirect(route('user.index'));
        }
        $user = User::query()
            ->select('users.*')
            ->where('id', $id)
            ->first(); // Use first() to get a single user instance
    
        return view('admin.Users.edit', compact('user', 'roles'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'user_type' => 'required|max:255',
            'mobile' => 'required|max:255',
        ], [
            'name.required' => 'Name is required',
            'mobile.required' => 'Mobile Number is required',
        ]);
        if($request->old_email != $request->email){
            $validatedData = $request->validate([
                'email' => ['required', 'string', 'max:255', 'unique:users'],
            ]);
        }
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->user_type = $request->input('user_type');
        $user->mobile = $request->input('mobile');
        $user->password = bcrypt($request->input('password'));
        $user->user_status =  $request->input('user_status');

        if ($request->hasFile('profile_photo_path')) {
            $destination = 'uploads/user_images/' . $user->profile_photo_path;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('profile_photo_path');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/user_images/', $filename);
            $user->profile_photo_path = $filename;
        }
        if ($request->old_email != $request->email) {
            $user->email = $request->email;
        }
        $roles = $request['roles']; //Retreive all roles
        //$uddser->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        } else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        $user->update();
        return redirect(route('user.index'))->with('message', 'User has been updated successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);    
        if (!$user) {
            return response()->json(['success'=>false, 'message' => 'User not found'], 404);
        }
        $user->user_status = 'InActive';
        $user->update();
        return response()->json(['success'=> true,'message' => 'User Deleted Successfully']);
    }
}
