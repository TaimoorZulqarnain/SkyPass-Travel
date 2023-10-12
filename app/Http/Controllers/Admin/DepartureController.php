<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departure;

class DepartureController extends Controller
{
    public function index(){
        $data['Departures'] = Departure::all();
        return view('admin.Departure.index',$data);

    }

    public function create(){
        return view('admin.Departure.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // die;
        $validatedData = $request->validate([
            'name' => 'required|unique:departures|max:255',
        ], [
            'name.unique' => 'Departure-Title Should be unique',
            'name.required' => 'Departure Title is required',
        ]);
         $Departure  = new Departure;
         $Departure->name = $request->input('name');
            // p($request->all());
    $Departure->save();
    return redirect(route('departure.index'))->with('message', 'Departure has been added successfully');
}

    public function edit($id){

        if(empty( trim($id) ) or !is_numeric( $id )){
            return redirect(route('departure.index'));
        }
        $data['departure']  = Departure::where('id','=',$id)->first();
        return view('admin.Departure.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ], [
            'name.required' => 'Departure Title is required',
        ]);
    
        $Departure = Departure::find($id);
        $Departure->name = $request->input('name');
    
        $Departure->update();
    
        return redirect(route('departure.index'))->with('message', 'Departure has been updated successfully');
    }
    
    public function destroy($id){
        Departure::where('id','=',$id)->delete();
        return redirect(route('departure.index'))->with('message','Departure has been  Deleted successfull');

    }

}
