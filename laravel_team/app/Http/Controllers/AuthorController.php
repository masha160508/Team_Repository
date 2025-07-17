<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use function Pest\Laravel\delete;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'date_birthday' => 'date',
            'place_of_birth' => 'required|max:250',
            'date_death' => 'date',
            'place_of_death' => 'required|max:250',
            'job' => 'required',
            'place_studies' => 'required|max:250',
             'start_study' => 'date',
            'graduated' => 'date',
            'additional_information' => 'required',
             ]);
        Author::create($request->all());
        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {

        $validated = $request->validate([
            'name' => 'required',
            'date_birthday' => 'date',
            'place_of_birth' => 'required|max:250',
            'date_death' => 'date',
            'place_of_death' => 'required|max:250',
            'job' => 'required',
            'place_studies' => 'required|max:250',
            'start_study' => 'date',
            'graduated' => 'date',
            'additional_information' => 'required',
        ]);
        $author->update($validated);
        return redirect()->route('authors.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index');
    }
}
