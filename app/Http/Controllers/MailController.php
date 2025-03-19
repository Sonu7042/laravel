<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // use for send email
use App\Mail\WelcomeEmail;  // import mail file 

class MailController extends Controller
{

   function MailController(Request $request)
   {
      $to = $request->to;
      $msg = $request->subject;
      $subject = $request->message;
      Mail::to($to)->send(new WelcomeEmail($msg, $subject));
      return "Email sent successfully";
   }



}
