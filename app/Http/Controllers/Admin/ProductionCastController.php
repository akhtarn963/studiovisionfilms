<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductionCast;
use App\Models\Production;

class ProductionCastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productionCasts = ProductionCast::with('production:id,title')->latest()->paginate(10);
        return view('admin.production-casts.index', compact('productionCasts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productions = Production::all();
        return view('admin.production-casts.create', compact('productions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'production_id' => ['required', 'exists:productions,id'],
            'name' => ['required', 'string', 'max:255'],
            'character_name' => ['nullable', 'string', 'max:255']
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('drama/cast_images', 'public');
        }
        $validated['bio'] = $request->input('bio');
        $validated['sort_order'] = ProductionCast::max('sort_order') + 1;
        $validated['slug'] = ProductionCast::generateUniqueSlug($validated['name']);

        ProductionCast::create($validated);

        return redirect()
            ->route('admin.production-casts.index')
            ->with('success', 'Production cast member created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productions = Production::all();
        $cast = ProductionCast::findOrFail($id);
        return view('admin.production-casts.edit', compact('cast', 'productions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $casts = ProductionCast::findOrFail($id);

        $validated = $request->validate([
            'production_id' => ['required', 'exists:productions,id'],
            'name' => ['required', 'string', 'max:255'],
            'character_name' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->hasFile('image')) {
           
            //delete the old image if it exists
            if ($casts->image && \Storage::disk('public')->exists($casts->image)) {
                \Storage::disk('public')->delete($casts->image);
            }

            $validated['image'] = $request->file('image')
                ->store('drama/cast_images', 'public');
        }        
        $validated['sort_order'] = $casts->sort_order; // Keep the existing sort order
        $validated['bio'] = $request->input('bio');
        $casts->update($validated);

        return redirect()
            ->route('admin.production-casts.index')
            ->with('success', 'Production cast member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $casts = ProductionCast::findOrFail($id);
        $casts->delete();

        return redirect()
            ->route('admin.production-casts.index')
            ->with('success', 'Production cast member deleted successfully.');
    }
}
