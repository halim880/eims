<?php

namespace App\Http\Controllers\Material\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return view('material.admin.library.book.books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.admin.library.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $request->store();

        return redirect()->route('library.book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('material.admin.library.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('material.admin.library.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->title = $request->title;
        $book->details = $request->details;
        $book->total_quantity = $request->total_quantity;
        $book->available = $request->available;
        $book->rack_no = $request->rack_no;
        $book->row_no = $request->row_no;
        $book->col_no = $request->col_no;
        $book->update();

        return redirect()->route('library.book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('library.book.index');
    }
}
