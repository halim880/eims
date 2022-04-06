<?php

namespace App\Http\Livewire\Teacher;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Courses extends Component
{
    public $courses;
    public function render()
    {
        $this->courses = Auth::user()->teacher->courses;
        // dd(Auth::user()->teacher);
        return view('livewire.teacher.courses');
    }
}
