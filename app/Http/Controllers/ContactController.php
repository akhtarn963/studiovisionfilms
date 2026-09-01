<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact_us');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        ContactUs::create($validated);

        return redirect()
            ->route('contact-us')
            ->with('success', 'Thank you for contacting us. We will get back to you soon.');
    }
}
