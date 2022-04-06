<?php

namespace App\Http\Livewire\Admin\Course;

use App\Models\Academic\Course;
use App\Models\Department;
use App\Models\Semester;
use Livewire\Component;

class CourseEntry extends Component
{
    public $departments;
    public $course;
    public $semesters;

    public function render()
    {
        $this->departments = Department::all();
        $this->semesters = Semester::all();

        return view('livewire.admin.course.course-entry');
    }

    public function store(){
        try {
            Course::create($this->course);
            $this->dispatchBrowserEvent('course_stored');
            $this->course = [];
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
