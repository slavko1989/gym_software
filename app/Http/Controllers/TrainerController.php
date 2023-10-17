<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainer;
use App\Http\Requests\TrainerRequest;

class TrainerController extends Controller
{
    public function create(){
        
        return view('trainers/create');
    }

    public function singl_trainer(Request $request,$id){

        
        return view('trainers/singl_trainer',[
                't'=>Trainer::find($id)
        ]);
    }

    public function store(TrainerRequest $request){
        
        $trainer = new Trainer;

        $trainer->name = $request->name;
        $trainer->email = $request->email;
        $trainer->phone = $request->phone;
        $trainer->country = $request->country;
        $trainer->address = $request->address;
        $trainer->city = $request->city;
        $trainer->pr_id = $request->pr_id;
        
        $image = $request->profile;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile->move('trainers_img',$imgname);
        $trainer->profile=$imgname;
        }

        $trainer->save();
        return redirect()->back()->with('message','Trainer are created');
    
    }

    public function delete($id){
        Trainer::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('danger_message','Trainer are deleted');
    }

    public function edit($id){

        return view('trainers/edit',
            ['edit'=>Trainer::find($id)
            ]);            
    }

    public function update(TrainerRequest $request,$id){

        $trainer = Trainer::find($id);

        $image = $request->profile;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile->move('trainers_img',$imgname);
        $trainer->profile=$imgname;
        }

        $trainer->name = $request->name;
        $trainer->email = $request->email;
        $trainer->phone = $request->phone;
        $trainer->country = $request->country;
        $trainer->address = $request->address;
        $trainer->city = $request->city;
        $trainer->pr_id = $request->pr_id;
        $trainer->update();

        return redirect()->back()->with('message','Trainer are updated');
    }

}
