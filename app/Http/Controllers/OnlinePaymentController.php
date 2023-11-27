<?php

namespace App\Http\Controllers;

use App\Services\FileUploadService;

use Illuminate\Http\Request;
use App\Http\Requests\MembersRequest;
use App\Models\Member;
use App\Models\Categories;
use Carbon\Carbon;
use Auth;
use PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\WebCardMail;
use App\Notifications\MemberCreateNotification;
use App\Models\User;

class OnlinePaymentController extends Controller
{
    
    public function create(){

        $member = Member::all();
        return view('online_payment/online_members_payment',compact('member'));
    }

 public function store(MembersRequest $request, FileUploadService $fileUploadService){
        
        $member = new Member;

        $id_u = auth::user()->id;

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
        $member->user_id = $id_u;

        /*$image = $request->profile;
        if($image){
        $imgname = time().'.'.$image->getClientOriginalExtension();
        $request->profile->move('members_img',$imgname);
        $member->profile=$imgname; } */


        $fileUploadService->uploadFile($request, $member);
            

        

        $member->save();

        auth()->user()->notify(new MemberCreateNotification($member->name));

        Mail::send('emails.web_card_mail', ['member' => $member], function($message){
                $message->to('slavko.slave1989@gmail.com','bull developer')->subject('Member web card created');
            });

        return redirect()->back()->with('message','You are created web card');
    
    }

    public function member_web_card(Request $request,$id){
        

        $user_id = Auth::user()->id;
        $card = Member::where('user_id',$user_id)->first();
        return view('members/member_web_card',compact('card'));
        

    }

     public function member_web_card_pdf(Request $request,$id){


        $user_id = Auth::user()->id;
        $card = Member::where('user_id',$user_id)->first();
        $pdf = PDF::loadView('members/member_web_card_pdf',compact('card'));
        return $pdf->download('card.pdf');

    }

}
