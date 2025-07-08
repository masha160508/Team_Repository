<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Language;

use App\Repositories\Interfaces\TeamRepositoryInterfaces;
use Illuminate\Http\Request;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $books = Book::all();
        return view('books.index', compact('books'));
    }
public function search(Request $request,TeamRepositoryInterfaces $teamRepository)
{
    $books = $teamRepository->search($request->title);
    return view('books.index',['books'=>$books]);
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'title' => 'required',
           'language_id' => 'required|exists:languages,id',
            'author' => 'required|max:250',
            'category_id' => 'required|exists:categories,id',
            'publication_date' => 'required|date',
            'description' => 'required',
            'image' => 'required',

        ]);
        Book::create($validated);
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
           'title' => 'required',
           'language_id' => 'required|exists:languages,id',
           'author' => 'required|max:250',
           'category_id' => 'required|exists:categories,id',
           'publication_date' => 'required|date',
           'description' => 'required',
            'image' => 'required',
        ]);
        $book->update($validated);
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }

    public function favourite(Book $book)
    {
        return view('books.favourite', compact('book'));
    }
}
