<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{
    public function index() {
        $passingDataToView = 'Simple Mail Send In Laravel!';
        $data["email"] = 'onnytra@gmail.com';
        $data["title"] = "Mail Testing";

        Mail::send('mail.simplemail', ['passingDataToView'=> $passingDataToView], function ($message) use ($data){
            $message->to($data["email"]);
            $message->subject($data["title"]);
        });

        return 'Mail Sent';
    }
}
