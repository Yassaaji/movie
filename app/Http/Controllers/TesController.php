<?php

namespace App\Http\Controllers;

use App\Mail\TesMail;
// use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TesController extends Controller
{
    public function index()
    {
        Mail::to('kadergantengrek@gmail.com')->send(new TesMail);
    }
}
