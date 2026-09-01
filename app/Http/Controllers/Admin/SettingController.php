<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::latest()->paginate(10);
        return view("admin.settings.index",compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $settings = $request->input('settings', []);

    foreach ($settings as $index => $setting) {
        $request->validate([
            "settings.$index.label" => ['required', 'string', 'max:255'],
            "settings.$index.key"   => [
                'required',
                'string',
                'max:255',
                Rule::unique('settings', 'key')
                    ->ignore($setting['id'] ?? null), // 👈 ignore current row if updating
            ],
            "settings.$index.value" => ['nullable', 'string', 'max:1000'],
        ]);

        Setting::updateOrCreate(
            ['id' => $setting['id'] ?? null],
            [
                'label' => $setting['label'],
                'key'   => $setting['key'],
                'value' => $setting['value'],
            ]
        );
    }
    cache()->forget('settings.all');
    return redirect()->back()->with('success', 'Settings saved successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
