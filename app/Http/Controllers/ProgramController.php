<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Http\Requests\ProgramsRequest;

class ProgramController extends Controller
{
     public function create(){

        return view('programs/create');
    }

    public function store(ProgramsRequest $request){

        $program = new Program;
        $program->name = $request->name;
        $program->price = $request->price;
        $program->save();

        return redirect()->back()->with('message','program are created');

    }

    public function delete($id){
        Program::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('danger_message','Program are deleted');

        /*$del = Program::where('id',$id);

        if(!$del){
            return response()->json(['message'=>'Not del'],404);
        }
            $del->firstOrFail()->delete();
        return response()->json(['message'=>'del'])->with('danger_message','Program are deleted');*/


    }

    public function edit($id){

        $edit = Program::find($id);
        return view('programs/edit',compact('edit'));

    }

    public function update(ProgramsRequest $request,$id){

        $program = Program::find($id);
        $program->name = $request->name;
        $program->price = $request->price;
        $program->update();

        return redirect()->back()->with('message','Program are updated');
    }
}
