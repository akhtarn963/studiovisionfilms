<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WriterSubmission;

class WriterSubmissionController extends Controller
{
    public function index()
    {
        $genres = Config('productions.genres');
        return view('writer_submission', compact('genres'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'script_title' => 'required|string|max:255',
            'genre' => 'nullable|string|max:255',
            'logline' => 'nullable|string|max:255',
            'synopsis' => 'nullable|string',
            'script_file' => 'required|file|mimes:pdf,doc,docx,txt|max:10240', // 10MB max
        ]);

        if ($request->hasFile('script_file')) {
            $customFileName = time() . '_' . preg_replace('/\s+/', '_', strtolower($request->input('name')));
            $file_type = $request->file('script_file')->getClientOriginalExtension();
            $customFileName .= '.' . $file_type;
            $validatedData['script_file_path'] = $request->file('script_file')->storeAs('scripts', $customFileName, 'private');
        }

        WriterSubmission::create($validatedData);

        return redirect()->back()->with('success', 'Your script has been submitted successfully! Our team will review your submission and contact you soon.');
    }
}
