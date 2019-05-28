<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
   public function send(){
       Mail::send(['text'=>'donations/mail'],['name'=>'Habiba'], function($message){
              $message->to('habibahaidary79@gmail.com','To Habiab')->subject('Request approved');
              $message->from('habibahaidary79@gmail.com','Habiba');
       });
   }
}
