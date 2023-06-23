<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
use App\Models\Category;
use App\Models\Cart;

class ContactUsFormController extends Controller
{
    public function show_contactForm()
    {
        $categories=Category::all();
        $user = auth()->user(); // Use the auth() helper function instead of auth::user()
        $count = 0; // Initialize $count to 0
    
        if ($user) {
            $count = cart::where('name', $user->name)->count();
        }

        return view('/home.contact',compact('categories','count'));
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


        return redirect()->back()->with('message', 'We have received your message and would like to thank you for writing to us.');
    }
}
