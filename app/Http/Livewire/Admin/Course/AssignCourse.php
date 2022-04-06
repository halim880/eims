<?php

namespace App\Http\Livewire\Admin\Course;

use App\Models\Academic\Course;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AssignCourse extends Component
{
    public $course;
    public $teacher;
    public $states;

    public function render()
    {
        return view('livewire.admin.course.assign-course');
    }

    public function store(){
        try {
            DB::table('course_teacher')->insert([
                'course_id'=>$this->states["course_id"],
                'teacher_id'=>$this->states["teacher_id"],
            ]);
            $this->dispatchBrowserEvent('course_assigned');
            $this->course = [];
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('course_or_teacher_not_found');
        }
    }
}
