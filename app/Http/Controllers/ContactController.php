<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ThanksMail;
use App\Mails;
use App\SendMails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send()
    {
        try{
            request()->validate([
                'name' => 'required|max:10',
                'email' => 'required|email|max:200',
                'message' =>'required'
            ]);

            $email = Mails::create([
                'name' => request('name'),
                'email' => request('email'),
                'body' => request('message')
            ]);

            Mail::to('omarbnzaky@gmail.com')->send(new ContactMail($email));

            Mail::to($email->email)->send(new ThanksMail($email));


            return redirect()->back()->with('success','Your Email sent successfully');

        }catch (\Exception $exception){
            return redirect()->back()->with('error','Something bad occurred while sending email');
        }
    }
}
