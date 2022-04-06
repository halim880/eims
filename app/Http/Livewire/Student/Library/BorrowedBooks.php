<?php

namespace App\Http\Livewire\Student\Library;

use App\Models\IssueBook;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BorrowedBooks extends Component
{
    public $issues;
    public function render()
    {
        $this->issues = IssueBook::where('student_id', Auth::user()->student->id)->get();

        return view('livewire.student.library.borrowed-books');
    }
}
