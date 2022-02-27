<?php

namespace App\Http\Livewire\Admin;

use App\Helpers\StudentType;
use App\Models\Student;
use App\Models\Teacher;
use Livewire\Component;

class Dashboard extends Component
{
    public $number_of_teachers;
    public $number_of_students;

    public function render()
    {
        $this->number_of_students = Student::where([
            'type'=> StudentType::ACTIVE,
        ])->count();

        $this->number_of_teachers = Teacher::count();

        return view('livewire.admin.dashboard');
    }
}
