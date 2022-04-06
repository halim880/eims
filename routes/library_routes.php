<?php

use App\Http\Controllers\Material\Library\LibraryController;
use App\Http\Controllers\Material\Library\BooksController;
use App\Http\Livewire\Library\Book\BookEntry;
use App\Http\Livewire\Library\Book\BooksTable;
use App\Http\Livewire\Library\Dashboard;
use App\Http\Livewire\Library\ManageIssue;
use App\Http\Livewire\Library\ManageIssue\CheckIssue;
use App\Http\Livewire\Library\ManageIssue\DueBooks;
use App\Http\Livewire\Library\ManageIssue\RecentIssue;
use App\Http\Livewire\Library\ManageStudent;
use App\Http\Livewire\Library\Students;
use Illuminate\Support\Facades\Route;
use Psy\VersionUpdater\Checker;

Route::prefix('library/')->name('library.')->middleware('librarian')->group(function(){
    // Route::get('dashboard', [LibraryController::class, 'dashboard'])->name('dashboard');
    
    Route::get('book/issue/{book}', [LibraryController::class, 'issueBook'])->name('book.issue');
    Route::Post('book/', [LibraryController::class, 'submitIssue'])->name('book.issue.submit');

});

Route::get('library/dashboard', Dashboard::class)->name('library.dashboard');
Route::get('library/students', Students::class)->name('library.students');
Route::get('library/student-entry', ManageStudent::class)->name('library.student.entry');

Route::get('library/books', BooksTable::class)->name('library.Books');
Route::get('library/book-entry', BookEntry::class)->name('library.Book.entry');

Route::get('library/manage-issue', ManageIssue::class)->name('library.manage_issue');
Route::get('library/recent-issue', RecentIssue::class)->name('library.recent_issue');
Route::get('library/due-books', DueBooks::class)->name('library.due_books');
Route::get('library/check-issue', CheckIssue::class)->name('library.check_issue');







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