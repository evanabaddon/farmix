<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Settings\GeneralSettings;
use App\Settings\HomePageSettings;

class ContactController extends Controller
{
    public function contact(GeneralSettings $generalSettings, HomePageSettings $homepageSettings)
    {
        
        return view('contact', compact('generalSettings', 'homepageSettings'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone'],
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
        ]);

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
