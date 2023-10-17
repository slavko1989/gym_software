<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Requests\CatRequest;

class CatController extends Controller
{
    public function create(){

        return view('cat/create');
    }

    public function store(CatRequest $request){

        $cat = new Categories;
        $cat->name = $request->name;
        $cat->price = $request->price;
        $cat->save();

        return redirect()->back()->with('message','Category are created');

    }

    public function delete($id){
        Categories::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('danger_message','Category are deleted');
    }

    public function edit($id){

        $edit = Categories::find($id);
        return view('cat/edit',compact('edit'));

    }

    public function update(CatRequest $request,$id){

        $cat = Categories::find($id);
        $cat->name = $request->name;
        $cat->price = $request->price;
        $cat->update();

        return redirect()->back()->with('message','Category are updated');
    }
}
