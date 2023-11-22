<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WebCardMail;

class WebCardMailTrap extends Controller
{

public function card_page(){
        
        return view('members/send_card');
    }

    public function send_card_mail(Request $request){
        Mail::to('slavko.slave1989@gmail.com')->send(new WebCardMail($request));
        return redirect()->back()->with('mess','Message is sent');
    }
}
