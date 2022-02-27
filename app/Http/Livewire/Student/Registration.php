<?php

namespace App\Http\Livewire\Student;

use App\Models\Academic\Course;
use App\Models\Semester;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Registration extends Component
{
    use WithPagination;
    public $courses;
    public $selectedCourses = [];
    public $semester;
    public $semesters;

    public function render()
    {
        $this->semesters = Semester::all();

        $this->courses = Course::where([
            'department_id'=> Auth::user()->student->department_id,
            'semester_id'=> 105,
        ])->get();
        return view('livewire.student.registration');
    }

    public function addCourse(Course $course){
        $course = [
            'course_id'=> $course->id,
            'course_code'=> $course->course_code,
            'credit'=> $course->credit,
            'type'=> 'regular',
        ];

        $this->selectedCourses[]= $course;
    }

    public function remove(int $index){
        unset($this->selectedCourses[$index]);
    }

    public function change(){
        $this->courses = Course::where([
            'department_id'=> Auth::user()->student->department_id,
            'semester_id'=> $this->semester,
        ])->get();

        // dd($this->courses);
    }
}
