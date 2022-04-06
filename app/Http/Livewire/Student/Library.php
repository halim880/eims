<?php

namespace App\Http\Livewire\Student;

use App\Models\Book;
use App\Models\IssueBook;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Library extends Component
{
    public $books;

    public function render()
    {
        $this->books = Book::all();
        return view('livewire.student.library');
    }
}
