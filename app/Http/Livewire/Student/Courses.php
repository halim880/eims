<?php

namespace App\Http\Livewire\Student;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Courses extends Component
{
    public $courses;
    public function render()
    {
        $this->courses = Auth::user()->student->coursesList();
        return view('livewire.student.courses');
    }
}
