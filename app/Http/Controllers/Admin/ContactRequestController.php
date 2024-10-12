<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContacLead;
use App\Models\Contact;
use App\Models\ContactLead;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    public function contact_request()
    {
        $contact = Contact::with('country')->get();
        return view('admin_panel.admin_dashboard.contact_request.list', compact('contact'));
    }
    public function destroy($id)
    {
        // dd($id);

        // Find the user by ID
        $contact = Contact::find($id);
        // Delete the user
        $contact->delete();

        return redirect()->back();
    }
    public function lead_contact_request()
    {
        $contact = ContactLead::get();
        return view('admin_panel.admin_dashboard.leadcontact_request.list', compact('contact'));
    }
    public function lead_destroy($id)
    {
        // dd($id);

        // Find the user by ID
        $contact = ContactLead::find($id);
        // Delete the user
        $contact->delete();

        return redirect()->back();
    }
}
