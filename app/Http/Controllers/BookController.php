<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderBy('created_at', 'desc')->get();
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'price' => $request->price,
            'plot' => $request->plot,
            'cover' => $request->file('cover')->store('books-cover', 'public'),
        ]);
        return redirect(route('home'))->with('message', 'book added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'price' => $request->price,
            'plot' => $request->plot,
            'cover' => $request->file('cover') ? $request->file('cover')->store('books-cover', 'public') : $book->cover,
        ]);
        return redirect(route('home'))->with('message', 'book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect(route('home'))->with('message', 'book deleted successfully');
    }
}
