<?php

namespace App\Http\Livewire\Admin\Teacher;

use App\Models\Teacher;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TeachersTable extends Component
{
    public $teachers;
    public $teacher;
    public bool $show = false;

    public $courses;

    public function render()
    {
        $this->teachers = Teacher::all();
        return view('livewire.admin.teacher.teachers-table');
    }

    public function showDetails(Teacher $teacher){
        $this->show = true;
        $this->teacher = $teacher;
        $this->courses = $teacher->courses;
    }

    public function back(){
        $this->show = false;
        $this->teacher = null;
    }

    public function removeCourse(int $course_id){
        try {
            DB::table('course_teacher')->where([
                'course_id'=> $course_id,
                'teacher_id'=> $this->teacher->id,
            ])->delete();
            $this->dispatchBrowserEvent('course_removed');

            $this->courses = $this->teacher->courses;
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
