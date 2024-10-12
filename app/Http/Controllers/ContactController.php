<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactLead;
use Illuminate\Http\Request;
use App\Mail\LeadContactRequestMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = $request->all();
        // dd($contact);
        Contact::create($contact);
        $adminEmail = 'info@foodicis.com'; // Replace with actual admin email

        // Send the email with the contact data to the admin
        Mail::to($adminEmail)->send(new LeadContactRequestMail($contact));

        return redirect()->back();
        // return response()->json(['message' => 'Your message has been sent successfully!']);
    }
    // public function leadstore(Request $request)
    // {
    //     dd($request->all());
    //     $contact = $request->all();
    //     // Send email to the admin
    //     $adminEmail = 'raxa.kzx@gmail.com'; // Replace with the actual admin email

    //     // Loop through all contacts and send an email for each (or adjust based on your use case)
    //     foreach ($contact as $lead) {
    //         Mail::to($adminEmail)->send(new LeadContactRequestMail($lead));
    //     }
    //     // dd($contact);
    //     ContactLead::create($contact);
    //     // return redirect()->back();
    //     return response()->json(['message' => 'Your message has been sent successfully!', 'reload' => true]);
    // }
    public function leadstore(Request $request)
    {
        // Validate the request data (you can adjust the rules as per your requirements)
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new contact lead
        $contact = ContactLead::create($validatedData);

        // Send email to the admin
        // $adminEmail = 'info@foodicis.com'; // Replace with actual admin email

        // Send the email with the contact data to the admin
        // Mail::to($adminEmail)->send(new LeadContactRequestMail($contact));

        // Return a JSON response to the frontend
        return response()->json([
            'message' => 'Your message has been sent successfully!',
            'reload' => true
        ]);
    }
}
