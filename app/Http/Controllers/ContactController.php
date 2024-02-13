<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        
        Mail::to('andrewferrer37@gmail.com')->send(new ContactMail($request->name, $request->email, $request->body));
        
        return redirect()->back();
    }
}
