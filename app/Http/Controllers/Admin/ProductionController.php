<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Production;
use Illuminate\Support\Facades\Storage;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productions = Production::orderBy('release_date', 'desc')->latest()->paginate(10);
        $mediums = Config('productions.mediums');
        $genres = Config('productions.genres');
        $statuses = Config('productions.statuses');

        return view('admin.productions.index', compact('productions', 'mediums', 'genres', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mediums = Config('productions.mediums');
        $genres = Config('productions.genres');
        $statuses = Config('productions.statuses');
        return view('admin.productions.create', compact('mediums', 'genres', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'director' => ['nullable', 'string', 'max:255'],
            'writer' => ['nullable', 'string', 'max:255'],
            'short_description' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'youtube_url' => ['nullable', 'url', 'max:2048'],
            'poster' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:5120'],
            'is_published' => ['nullable', 'boolean'],
            'genre' => ['nullable', 'string'],
            'medium' => ['nullable', 'string'],
            'release_date' => ['nullable', 'date'],
            'status' => ['nullable', 'string'],
            'cast' => ['nullable', 'string'],
        ]);

        $validated['slug'] = Production::generateUniqueSlug($validated['title']);
        $validated['is_published'] = $request->boolean('is_published');

        if ($request->hasFile('poster')) {
            $validated['poster'] = $request->file('poster')
                ->store('drama/posters', 'public');
        }

        Production::create($validated);

        return redirect()
            ->route('admin.productions.index')
            ->with('success', 'Production created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $production = Production::findOrFail($id);
        return view('admin.productions.show', compact('production'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $production = Production::findOrFail($id);
        $mediums = Config('productions.mediums');
        $genres = Config('productions.genres');
        $statuses = Config('productions.statuses');

        return view('admin.productions.edit', compact('production', 'mediums', 'genres', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $production = Production::findOrFail($id);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'director' => ['nullable', 'string', 'max:255'],
            'writer' => ['nullable', 'string', 'max:255'],
            'short_description' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'youtube_url' => ['nullable', 'url', 'max:2048'],
            'poster' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:5120'],
            'is_published' => ['nullable', 'boolean'],
            'genre' => ['nullable', 'string'],
            'medium' => ['nullable', 'string'],
            'release_date' => ['nullable', 'date'],
            'status' => ['nullable', 'string'],
            'cast' => ['nullable', 'string'],
            'remove_poster' => ['nullable', 'boolean'],
        ]);

        //$validated['slug'] = Production::generateUniqueSlug($validated['title']);
        $validated['is_published'] = $request->boolean('is_published');

        if ($request->hasFile('poster')) {

        // Delete old poster if it exists
        if ($production->poster) {
            Storage::disk('public')->delete($production->poster);
        }

        $validated['poster'] = $request->file('poster')
        ->store('drama/posters', 'public');

        } elseif ($request->boolean('remove_poster')) {

            if ($production->poster) {
                Storage::disk('public')->delete($production->poster);
            }

            $validated['poster'] = null;

        } else {

            // Don't overwrite existing poster
            unset($validated['poster']);
        }

        unset($validated['remove_poster']);

        $production->update($validated);

        return redirect()
            ->route('admin.productions.index')
            ->with('success', 'Production updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $production = Production::findOrFail($id);
        if ($production->poster) {
            Storage::disk('public')->delete($production->poster);
        }

        $production->delete();

        return redirect()
            ->route('admin.productions.index')
            ->with('success', 'Production deleted successfully.');
    }
}
