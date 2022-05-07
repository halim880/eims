<?php

namespace App\Http\Livewire\Admin\Admission;

use App\Helpers\ApplicationStatus;
use App\Helpers\StudentIdGenerator;
use App\Helpers\UserRole;
use App\Models\Academic\Session;
use App\Models\AdmissionApplication;
use App\Models\Academic\Department;
use App\Models\Academic\Semester;
use App\Models\Student;
use App\Models\User;
use App\Services\StudentService;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ApplicationDetails extends Component
{
    public $application;
    public $approved = false;
    public $rejected = false;
    public bool $approving = false;

    public $departments;
    public $semesters;

    protected $rules = [
        'application.department_id'=> 'required',
        'application.semester_id'=> 'required',
        'application.student_id'=> 'required',
    ];

    public function render()
    {
        $this->departments = Department::all();
        $this->semesters = Semester::all();
        $this->application->session_id = Session::latest()->first()->id;
        return view('livewire.admin.admission.application-details');
    }

    public function mount($id)
    {
        $this->application = AdmissionApplication::find($id);
        
        if($this->application->status == ApplicationStatus::REJECTED) $rejected = true;
    }

    public function approve(){
        $this->approving = true;
    }

    public function store(){
        if(StudentService::storeStudent($this->application->toArray())){
            $this->approved = true;
            $this->dispatchBrowserEvent('application_approved');
        }
    }

    public function reject(){
        $this->application->status = ApplicationStatus::REJECTED;
        $this->application->update();

        $this->rejected = true;

        $this->dispatchBrowserEvent('application_rejected');
    }

    public function autoGenerateId(){
        $this->application['student_id'] = StudentIdGenerator::generate($this->application['session_id'], $this->application['department_id']);
    }
}
