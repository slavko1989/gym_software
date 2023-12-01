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
use Exception;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;
use Illuminate\Support\Facades\Session;


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

        if($request->web_card != 2){
           
        $fileUploadService->uploadFile($request, $member); 
        $member->save();

        auth()->user()->notify(new MemberCreateNotification($member->name));

        Mail::send('emails.web_card_mail', ['member' => $member], function($message){
                $message->to('slavko.slave1989@gmail.com','bull developer')->subject('Member web card created');
            });

        return redirect()->back()->with('message','You are created web card');
    }else{

        Session::put('temp_member_data', $member);
        Log::info('Sadržaj sesije nakon smeštanja temp_member_data: ' . print_r(Session::all(), true));
         return redirect('online_payment/payment');
    }
    
    }

   

     public function payment(Request $request){


        try{
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for payment" 
        ]);

        $payment = Session::get('temp_member_data');
        Log::info('Sadržaj temp_member_data iz sesije: ' . print_r($payment, true));

        if($payment instanceof Member){
            $payment->save();
            return back()->with('success', 'Payment successful! Member saved.');
        }else{
            return back()->with('error', 'No member data found in session.');
        }
        

         } catch (Stripe\Exception\CardException $e) {
        
        return back()->with('error', $e->getMessage());
    } catch (Exception $e) {
        
        return back()->with('error', $e->getMessage());
    } 
        
    }

     public function stripe_view(Request $request){

        $payment = Session::get('temp_member_data');
        return view('online_payment/payment',compact('payment'));
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
