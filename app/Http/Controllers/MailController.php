<?php

namespace App\Http\Controllers;

use App\Mail\YaeleContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $userName = $request['name'];
        $userEmail = $request['email'];
        $userPhone = $request['phone'];
        $userMessage = $request['message'];
        Mail::to('victorcalancea654@gmail.com')->send(new YaeleContactMail([
            'name' => $userName,
            'email' => $userEmail,
            'phone' => $userPhone,
            'message' => $userMessage,
        ]));
        return redirect()->back();
    }
}
