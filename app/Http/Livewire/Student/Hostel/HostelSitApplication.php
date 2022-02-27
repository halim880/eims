<?php

namespace App\Http\Livewire\Student\Hostel;

use App\Services\StudentService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HostelSitApplication extends Component
{
    public $states = [];
    public $student_id;

    protected $rules = [
        'student_id' => 'required|unique:hostel_members',
        'states.father_occupation' => 'required',
        'states.father_yearly_income' => 'required',
        'states.mother_occupation' => 'required',
        'states.mother_yearly_income' => 'required',
        'states.total_family_member' => 'required',
        'states.yearly_family_income' => 'required',
        'states.current_address' => 'required',
        'states.permanent_address' => 'required',
    ];

    public function render()
    {
        $this->student_id = Auth::user()->student->id;
        return view('livewire.student.hostel.hostel-sit-application');
    }



    protected $validationAttributes = [
        'application.student_name' => 'student name',
        'dob'=> "Date of birth",
    ];

    public function store(){
        $this->validate();
        $this->states['student_id']=$this->student_id;
        $saved = StudentService::applyForHostelSit($this->states);
        if($saved){
            $this->application = [];
            $this->dispatchBrowserEvent('application_submitted');
            $this->states = [];
        }
    }
}
