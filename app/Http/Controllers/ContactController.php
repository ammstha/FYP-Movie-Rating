<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class ContactController extends Controller
{
    public function show(){
        return view('contact.contact');
    }
    public function create(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10']);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('contact.email', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('amm.reet.stha1@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was Sent!');

        return redirect('/');
    }
}
