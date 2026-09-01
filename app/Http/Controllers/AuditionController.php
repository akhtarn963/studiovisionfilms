<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audition;

class AuditionController extends Controller
{
    public function index()
    {
        return view('audition');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:auditions',
            'phone' => 'nullable|string|max:20',
            'gender' => 'nullable|string|max:10',
            'city' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:255',
            'message' => 'required|string',
            'video_link' => 'required|file|mimes:mp4,mov,avi|max:10240', // 10MB max
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('video_link')) {
            $validatedData['video_link'] = $request->file('video_link')->store('auditions', 'private');
        }

        if ($request->hasFile('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        Audition::create($validatedData);

        return redirect()->back()->with('success', 'Audition submitted successfully! Our team will review your submission and contact you soon.');
    }
}
