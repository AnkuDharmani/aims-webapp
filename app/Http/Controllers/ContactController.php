<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validated) {
            throw ValidationException::withMessages([
                'name' => ['Your custom error message for the name field'],
                'email' => ['Your custom error message for the email field'],
                'subject' => ['Your custom error message for the subject field'],
                'message' => ['Your custom error message for the message field'],
            ]);
        }

        $mailData = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message']
        ];

        // dd($mailData);

        Mail::to('info@aimsalbertalogistics.com')->send(new ContactFormMail(
          $mailData
        ));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}