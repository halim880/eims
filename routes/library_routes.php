<?php

use App\Http\Controllers\Material\Library\LibraryController;
use App\Http\Controllers\Material\Library\BooksController;
use Illuminate\Support\Facades\Route;

Route::prefix('library/')->name('library.')->middleware('librarian')->group(function(){
    Route::get('dashboard', [LibraryController::class, 'dashboard'])->name('dashboard');
    
    Route::get('book/issue/{book}', [LibraryController::class, 'issueBook'])->name('book.issue');
    Route::Post('book/', [LibraryController::class, 'submitIssue'])->name('book.issue.submit');
});


Route::get("book", [BooksController::class, 'index'])->name('library.book.index');
Route::post("book/store", [BooksController::class, 'store'])->name('library.book.store');
Route::get("book/create", [BooksController::class, 'create'])->name('library.book.create');
Route::get("book/{book}/show", [BooksController::class, 'show'])->name('library.book.show');
Route::get("book/{book}/edit", [BooksController::class, 'edit'])->name('library.book.edit');
Route::get("book/{book}/destroy", [BooksController::class, 'destroy'])->name('library.book.destroy');
Route::put("book/{book}/update", [BooksController::class, 'update'])->name('library.book.update');


Route::get('/test', function (){
    return view('test');
});