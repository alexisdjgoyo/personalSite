<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'message' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        Mail::to('contacto@alexisdjgoyo.com')->send(new ContactMail($request));
        return redirect()->back()->with('email-success','Email enviado exitosamente.');
    }
}
