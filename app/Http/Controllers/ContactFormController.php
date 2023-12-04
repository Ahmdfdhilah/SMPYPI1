<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'required',
            'phone' => 'required|regex:/^08[0-9]{10}$/',
            'message' => 'required|string',
        ];

        // Validation messages
        $messages = [
            'required' => 'The :attribute field is required.',
            'email' => 'Please enter a valid email address.',
            'max' => 'The :attribute cannot exceed :max characters.',
            'regex' => 'Please enter a valid phone number format (e.g., 08XX-XXXX-XXXX).',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules, $messages);

        // Send email only if validation passes
        Mail::to(config('mail.to_address'))
            ->send(new ContactFormMail($validatedData));

        return redirect()->route('contact.form')->with('success', 'Form submitted successfully!');
    }
}
