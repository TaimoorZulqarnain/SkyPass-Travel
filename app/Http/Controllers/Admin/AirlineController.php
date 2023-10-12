<?php

namespace App\Http\Controllers\Admin;
use App\Models\Airline;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AirlineController extends Controller
{
    public function index(){

        $data['Airlines'] = Airline::all();
        return view('admin.Airline.index',$data);

    }

    public function create(){
        return view('admin.Airline.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // die;
        $validatedData = $request->validate([
            'name' => 'required|unique:airlines|max:255',
            'image' => 'required|image|mimes:jpeg,png|max:800',
        ], [
            'name.unique' => 'Airline-Title Should be unique',
            'name.required' => 'Airline Title is required',
            'image.required' => 'Image jpeg png gif',
        ]);
         $airline  = new Airline;
         $airline->name = $request->input('name');
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time(). '.'.$extension;
                $file->move('uploads/airline_images/',$filename);
                $airline->image = $filename;
            }
            // p($request->all());
    $airline->save();
    return redirect(route('airline.index'))->with('message', 'Airline has been added successfully');
}

    public function edit($id){

        if(empty( trim($id) ) or !is_numeric( $id )){
            return redirect(route('airline.index'));
        }
        $data['airline']  = Airline::where('id','=',$id)->first();
        return view('admin.Airline.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png|max:800',
        ], [
            'name.required' => 'Airline Title is required',
            'image.required' => 'Image must be in jpeg or png format',
        ]);
    
        $airline = Airline::find($id);
        $airline->name = $request->input('name');
    
        if ($request->hasFile('image')) {
            $destination = 'uploads/airline_images/' . $airline->image;
    
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/airline_images/', $filename);
            $airline->image = $filename;
        }
    
        $airline->update();
    
        return redirect(route('airline.index'))->with('message', 'Airline has been updated successfully');
    }
    
    public function destroy($id){
        Airline::where('id','=',$id)->delete();
        return redirect(route('airline.index'))->with('message','Airline has been  Deleted successfull');

    }

    }
