<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locations;
use App\Http\Requests\LocationRequest;

class LocationController extends Controller
{
    public function create(){
        return view('locations/create');
    }

    public function store(LocationRequest $request){

        $loc = new Locations;

        $loc->country = $request->country;
        $loc->city = $request->city;
        $loc->street = $request->street;
        $loc->phone = $request->phone;
        $loc->email = $request->email;

        $loc->save();
        return redirect()->back()->with('message','Location are created');
    
    }

    public function delete($id){
        Locations::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('danger_message','Location are deleted');
    }

    public function edit($id){

       
        return view('locations/edit',
            ['edit'=>Locations::find($id)
            ]);
            

    }

    public function update(LocationRequest $request,$id){

        $loc = Locations::find($id);

        $loc->email = $request->email;
        $loc->phone = $request->phone;
        $loc->country = $request->country;
        $loc->city = $request->city;
        $loc->street = $request->street;
        
        $loc->update();

        return redirect()->back()->with('message','Location are updated');
    }
}
