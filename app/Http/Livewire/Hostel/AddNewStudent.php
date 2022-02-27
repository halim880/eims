<?php

namespace App\Http\Livewire\Hostel;

use App\Helpers\PaymentStatus;
use App\Models\HostelMember;
use App\Models\Semester;
use App\Models\Student;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddNewStudent extends Component
{
    public $student;
    public $student_id;
    public $semester_id;
    public $hostel_id;
    public $room_no;
    public $sit_no;

    public $semesters;

    protected $rules = [
        'student_id' => 'required|unique:hostel_members',
        'room_no' => 'required',
        'sit_no' => 'required',
    ];

    public function render()
    {
        $this->semesters = Semester::all();
        $this->hostel_id = Auth::user()->provost->hostel->id;

        return view('livewire.hostel.add-new-student');
    }

    public function store(){

        $saved = false;
        $this->validate();

        try {
            $this->student = Student::findOrFail($this->student_id);
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('student-not-found');
            return;
        }
        
        DB::transaction(function () use($saved){
            $student = HostelMember::create([
                'student_id'=> $this->student_id,
                'semester_id'=> $this->semester_id,
                'hostel_id'=> $this->hostel_id,
                'room_no'=> $this->room_no,
                'sit_no'=> $this->sit_no,
            ]);
    
            if ($student!=null) {
                DB::table('hostel_payments')->insert([
                    'semester_id'=> $this->semester_id,
                    'student_id'=> $this->student_id,
                    'hostel_member_id'=> $student->id,
                    'hostel_fee_id'=> 1,
                    'amount'=> 1350,
                    'status'=> PaymentStatus::DUE,
                ]);
                $saved = true;
            }

            if($saved){
                $this->dispatchBrowserEvent('hostel-student-stored');
                $this->clearStates();
            }
        });

        
    }

    private function clearStates(){
        $this->student_id = "";
        $this->semester_id = "";
        $this->hostel_id = "";
        $this->room_no = "";
        $this->sit_no = "";
    }
}
