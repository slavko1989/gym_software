<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MembersRequest;
use App\Models\Member;
use App\Models\Categories;
use App\Models\Trainer;
use App\Models\Locations;
use App\Models\Companies;
use Carbon\Carbon;


class MemberController extends Controller
{
    public function create(){
        
        return view('members/create');
    }

    public function web_card_admin_panel(){
        
        return view('members/web_card_members_in_admin_panel');
    }

    public function singl_member(Request $request,$id){

        $member = Member::find($id);
        return view('members/singl',compact('member'));
    }

    public function store(MembersRequest $request){
        
        $member = new Member;

        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->country = $request->country;
        $member->address = $request->address;
        $member->city = $request->city;
        $member->cat_id = $request->cat_id;
        $member->comp_id = $request->comp_id;
        $member->date_begin = $request->date_begin;
        $member->date_ex = $request->date_ex;
        $member->status = $request->status;
        $member->payment = $request->payment;
        $member->trainer_id = $request->trainer_id;
        $member->location_id = $request->location_id;
        $member->web_card = $request->web_card;
        $member->user_id = $request->user_id;

        $image = $request->profile;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile->move('members_img',$imgname);
        $member->profile=$imgname;
        }

        $member->save();
        return redirect()->back()->with('message','Member are created');
    
    }

    public function delete($id){
        Member::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('danger_message','Member are deleted');
    }

    public function edit($id){

       
        return view('members/edit',
            ['edit'=>Member::find($id) ,
             'cats'=>Categories::all(),
             'comps'=>Companies::all(),
             'trn'=>Trainer::all(),
             'lcn'=>Locations::all()
            ]);
            

    }

    public function update(Request $request,$id){

        $member = Member::find($id);

        
         if ($request->email !== $member->email && Member::where('email', $request->email)->exists()) {
        return redirect()->back()->withErrors(['email' => 'The email is already taken.']);
    }


        $image = $request->profile;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile->move('members_img',$imgname);
        $member->profile=$imgname;
        }


        $member->updated_at = Carbon::now();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->country = $request->country;
        $member->city = $request->city;
        $member->address = $request->address;
        $member->date_begin = $request->date_begin;
        $member->date_ex = $request->date_ex;
        $member->cat_id = $request->cat_id;
        $member->status = $request->status;
        $member->payment = $request->payment;
        $member->comp_id = $request->comp_id;
        $member->trainer_id = $request->trainer_id;
        $member->location_id = $request->location_id;
        $member->update();

        return redirect()->back()->with('message','Member are updated');
    }

}
