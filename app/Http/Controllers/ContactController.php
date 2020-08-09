<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:3',
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        // $data = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'message' => $request->message,
        // ];

        Mail::to('contact@prossermedia.co.uk')->send(new ContactMail($contact));

        return redirect()->route('pages.contact')->with('success', 'success');
    }
}
