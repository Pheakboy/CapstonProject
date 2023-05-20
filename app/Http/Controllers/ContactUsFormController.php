<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactUsFormController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    // Store Contact Form data
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Store data in database
        $message = new Contact;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();



        return redirect('/contact')->with('message', 'We have received your message and would like to thank you for writing to us.');
    }
}
