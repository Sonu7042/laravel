<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // use for send email
use App\Mail\WelcomeEmail;  // import mail file 

class MailController extends Controller
{

   function MailController()
   {
      $to = "sonusinghmourya100@gmail.com";
      $msg = "dummpy Mail send by sonu singh";
      $subject = "Code Step by step";
      Mail::to($to)->send(new WelcomeEmail($msg, $subject));
   }
}
