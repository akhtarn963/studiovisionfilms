<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audition;
use Illuminate\Support\Facades\Storage;

class AuditionController extends Controller
{
    public function index()
    {
        $auditions = Audition::latest()->paginate(10);
        return view('admin.auditions.index', compact('auditions'));
    }

    public function show($id)
    {
        $audition = Audition::findOrFail($id);
        return view('admin.auditions.show', compact('audition'));
    }

    public function video($id)
    {
        $audition = Audition::findOrFail($id);

        if (!$audition->video_link || !Storage::disk('private')->exists($audition->video_link)) {
            abort(404);
        }

        return response()->file(
            Storage::disk('private')->path($audition->video_link)
        );
    }

    public function downloadVideo($id)
    {
        $audition = Audition::findOrFail($id);

        if (!$audition->video_link || !Storage::disk('private')->exists($audition->video_link)) {
            abort(404);
        }

        return Storage::disk('private')->download(
            $audition->video_link,
            'audition-' . $audition->id . '.mp4'
        );
    }
}
