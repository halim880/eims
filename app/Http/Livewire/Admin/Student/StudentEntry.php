<?php

namespace App\Http\Livewire\Admin\Student;

use App\Models\Academic\Session;
use App\Models\Department;
use App\Models\Semester;
use App\Models\Student;
use App\Models\User;
use App\Repositories\StudentRepository;
use App\Services\StudentService;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class StudentEntry extends Component
{
    public $student = [];
    public $departments = [];
    public $sessions = [];
    public $semesters = [];


    public function render()
    {
        $this->departments = Department::all();
        $this->sessions = Session::all();
        $this->semesters = Semester::all();

        return view('livewire.admin.student.student-entry');
    }

    public function store(){
        if (StudentService::studentEntry($this->student)) {
            $this->dispatchBrowserEvent('student-saved');
            $this->student = [];
        }
    }
}
