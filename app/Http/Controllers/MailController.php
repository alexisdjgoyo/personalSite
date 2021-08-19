<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to('contacto@alexisdjgoyo.com')->send(new ContactMail($request));
        return $request;
    }
}
