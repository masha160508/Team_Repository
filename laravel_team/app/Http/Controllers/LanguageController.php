<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        return view('languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('languages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
         'name' => 'required|max:100',
        ]);
        Language::create($validated);
        return redirect()->route('languages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Language $language)
    {
        return view('languages.show', compact('language'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Language $language)
    {
        return view('languages.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Language $language)
    {
        $language->update($request->all());
        return redirect()->route('languages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Language $language)
    {
        $language->delete();
        return redirect()->route('languages.index');
    }
}
