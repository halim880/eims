<?php

namespace App\Http\Livewire\Admin\Teacher;

use App\Models\Department;
use App\Services\AdminService;
use Livewire\Component;

class TeacherEntry extends Component
{
    public $departments;
    public $teacher;

    public function render()
    {
        $this->departments = Department::all();
        return view('livewire.admin.teacher.teacher-entry');
    }

    public function store(){
        if(AdminService::storeTeacher($this->teacher)){
            $this->dispatchBrowserEvent('teacher_stored');
            $this->teacher = [];
        }
    }
}
