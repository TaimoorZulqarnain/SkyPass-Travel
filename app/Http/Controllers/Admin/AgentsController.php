<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Monarobase\CountryList\CountryListFacade;
use App\Models\User;
use App\Models\Agent;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Auth;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
    Auth::user()->user_type;
        return view('admin.agents.index');
    }

    public function agents_list(Request $request)
    {
        $data = Agent::query();
        $data->join('users', 'agents.user_id', '=', 'users.id')->select('users.id', 'users.name', 'users.email', 'users.mobile', 'agents.agent_company', 'agents.address', 'agents.city', 'agents.country','agents.id as agent_id' );
        return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('sr_no', function ($row) use (&$counter) {
                //     return ++$counter;
                // })
                ->addColumn('DT_RowIndex', function ($row) {
                    return ''; // DataTables will automatically add and manage DT_RowIndex
                })
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <div class="row x-gap-10 y-gap-10 items-center">
                    <a href="' . route('agents.edit', ['agent' => $row->agent_id]) . '" class="flex-center bg-light-2 rounded-4 size-35">
                    <i class="icon-edit text-16 text-light-1"></i>
                  </a>
                  <button class="flex-center bg-light-2 rounded-4 size-35 deleteAgent" data-id="'.$row->agent_id.'">
                        <i class="icon-trash-2 text-16 text-light-1"></i>
                    </button>
                    </div>
                    ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = CountryListFacade::getList('en');
        return view('admin.agents.add', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'max:50'],
            'mobile' => ['required', 'string', 'max:20'],
            'agent_company' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ]);
        $slug = "";
        if($request->agent_company !== ""){
            $slug =  preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($request->agent_company));
        }
        else{
            $slug =  preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($request->name));
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile' => $request->mobile,
        ]);
        $agent = Agent::create([
            'user_id' => $user->id,
            'agent_company' => $request->agent_company,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'slug' => $slug,
        ]);
        return redirect(route('agents.index'))->with('message', 'Agent record added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $agent = Agent::query()
            ->join('users', 'agents.user_id', '=', 'users.id')
            ->select('users.id', 'users.name', 'users.email', 'users.mobile', 'agents.agent_company', 'agents.address', 'agents.city', 'agents.country','agents.id as agent_id' )
            ->where('agents.id', $id)
            ->first();
        $countries = CountryListFacade::getList('en');
        return view('admin.agents.edit', compact('agent', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:20'],
            'agent_company' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ]);
        if($request->old_email != $request->email){
            $validatedData = $request->validate([
                'email' => ['required', 'string', 'max:255', 'unique:users'],
            ]);
        }
        $agent = Agent::find($id);
        $agent->agent_company = $request->agent_company;
        $agent->address = $request->address;
        $agent->city = $request->city;
        $agent->country = $request->country;
        $agent->update();
        $user = User::find($agent->user_id);
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        if ($request->old_email != $request->email) {
            $user->email = $request->email;
        }
        $user->update();

        return redirect(route('agents.index'))->with('message', 'Agent record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agent = Agent::find($id);
        Agent::where('id','=',$id)->delete();
        User::where('id','=',$agent->user_id)->delete();
        return response()->json(['message' => 'Agent record deleted successfully ']);
    }
}
