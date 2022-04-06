<?php

namespace App\Http\Livewire\Admin\Course;

use App\Models\Academic\Course;
use Livewire\Component;

class CourseTable extends Component
{
    public $courses;
    public function render()
    {
        $this->courses = Course::all();
        return view('livewire.admin.course.course-table');
    }
}
