<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WriterSubmission;
use Illuminate\Support\Facades\Storage;

class WriterSubmissionController extends Controller
{
    public function index()
    {
        $submissions = WriterSubmission::latest()->paginate(10);

        return view('admin.scripts.index', compact('submissions'));
    }

    public function show($id)
    {
        $submission = WriterSubmission::findOrFail($id);

        return view('admin.scripts.show', compact('submission'));
    }

    public function viewScript($id)
    {
        $submission = WriterSubmission::findOrFail($id);

        if (
            !$submission->script_file ||
            !Storage::disk('private')->exists($submission->script_file)
        ) {
            abort(404);
        }

        $path = Storage::disk('private')->path($submission->script_file);

        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        if ($extension !== 'pdf') {
            return redirect()
                ->route('admin.script-submissions.downloadScript', $id)
                ->with('error', 'Only PDF files can be viewed online. Please download the Word document.');
        }

        return response()->file($path, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($path) . '"',
        ]);
    }

    public function downloadScript($id)
    {
        $submission = WriterSubmission::findOrFail($id);

        if (
            !$submission->script_file_path ||
            !Storage::disk('private')->exists($submission->script_file_path)
        ) {
            abort(404);
        }

        $path = Storage::disk('private')->path($submission->script_file_path);

        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        return Storage::disk('private')->download(
            $submission->script_file_path,
            'script-' . $submission->id . '.' . $extension
        );
    }
}
