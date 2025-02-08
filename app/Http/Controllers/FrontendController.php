<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UserMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Address;


class FrontendController extends Controller
{
    public function index(){
        return view('home');
    }
    public function sendEmail(Request $request){
        $request->validate([
            'email'=>'required|email',
        ]);
        $email = $request->email;
        Mail::to($email)->send(new UserMail());
        return back()->with('success','Email sent successfully');
    }
}
