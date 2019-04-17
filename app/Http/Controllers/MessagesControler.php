<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Message; 
use App\Newsletter; 

class MessagesControler extends Controller
{
    //
    public function submit( Request $request) {
        
        // Mail::send('emails.contact-messages',[
        //     'msg' => $request->message
        // ], function ($mail) use($request) {
        //     $mail->from($request->email, $request->firstName);
        //     $mail->to('nadim.csm@gmail.com')->subject('Contact Message');
        // });
        $data = array (
            'firstName' => $request->firstName,
            'message' => $request->message,
            'phone' => $request->phone,
            'email' => $request->email
        );
        Mail::to('nadim.csm@gmail.com')->send(new SendMail($data));

        // create new message
        $message = new Message;
        $message->name = $request->input('firstName');
        $message->name .= ' '. $request->input('lastName');
        $message->phone = $request->input('phone');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        // save message
        $message->save();


        return redirect()->back()->with('flash_message','Thank you for contacting us. We will contact you shortly.');
    }

    public function store( Request $request) {
        // create new message
        $store = new Newsletter;
        $store->name = $request->input('name');
        $store->email = $request->input('email');
        
        // save message
        $store->save();


        return redirect()->back()->with('flash_message_news','Thank you for Newsletter Subscription.');
    }
}
