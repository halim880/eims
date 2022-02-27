<?php

namespace App\Http\Livewire\Admission;

use App\Models\Academic\Session;
use App\Models\AdmissionApplication as ModelsAdmissionApplication;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdmissionApplication extends Component
{
    public  $application = [];
    public $student_name;

    public $current_session;

    protected $rules = [
        'application.student_name' => 'required',
        'application.father_name' => 'required',
        'application.mother_name' => 'required',
        'application.dob' => 'required|date',
        'application.phone' => 'required',
        'application.email' => 'nullable|email',
        'application.current_address' => 'nullable',
        'application.permanent_address' => 'nullable',

        'application.ssc_board' => 'required',
        'application.ssc_reg' => 'required',
        'application.ssc_roll' => 'required',
        'application.ssc_passign_year' => 'required',
        'application.ssc_gpa' => 'required',
        'application.hsc_group' => 'required',

        'application.hsc_board' => 'required',
        'application.hsc_group' => 'required',
        'application.hsc_reg' => 'required',
        'application.hsc_roll' => 'required',
        'application.hsc_passign_year' => 'required',
        'application.hsc_gpa' => 'required',
    ];

    protected $validationAttributes = [
        'application.student_name' => 'student name',
        'dob'=> "Date of birth",
    ];

    public function render()
    {
        $this->current_session = Session::latest()->first();
        $this->application['session_id'] = $this->current_session->id;

        return view('livewire.admission.admission-application')->layout('layouts.blank');
    }

    public function store(){
        $saved = ModelsAdmissionApplication::create($this->application);
        if($saved){
            $this->application = [];
            $this->dispatchBrowserEvent('application_submitted');
        }
    }
}
