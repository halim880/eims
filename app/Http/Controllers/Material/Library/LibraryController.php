<?php

namespace App\Http\Controllers\Material\Library;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\IssueBook;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function dashboard(){
        $books = Book::all();
        return view('material.admin.library.book.books', compact('books'));
    }
    public function issueBook(Book $book){
        return view('material.admin.library.issue_book', compact('book'));
    }

    public function submitIssue(Request $request){
        $issue = new IssueBook();
        $issue->student_id = $request->student_id;
        $issue->book_id = $request->book_id;
        $issue->book_code = "test-code";
        $issue->issue_date = $request->issue_date;
        $issue->return_date = $request->return_date;
        $issue->status = "active";
        $issue->save();

        return redirect()->route('material.library.book.index');
    }
}
