<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\testSendingEmail;

class SendEmail extends Controller
{
    public function index()
    {
        Mail::to('yassa.aji@gmail.com')->send(new testSendingEmail());
    }
}
