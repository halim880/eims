<?php

namespace App\Http\Livewire\Hostel;

use App\Helpers\PaymentStatus;
use App\Models\HostelMember;
use App\Models\Semester;
use App\Services\Hostel\HostelApplicationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ApplicationDetail extends Component
{
    public $application;
    public bool $alloted = false;
    public bool $rejected = false;

    public bool $showAllotForm = false;

    public $semester_id;
    public $hostel_id;
    public $room_no;
    public $sit_no;

    public $semesters;

    public function render()
    {
        $this->semesters = Semester::all();
        $this->hostel_id = Auth::user()->provost->hostel->id;

        return view('livewire.hostel.application-detail');
    }

    public function mount(int $form_id){
        $this->application = HostelApplicationService::getApplicatinByFormId($form_id);
    }

    public function showForm(){
        $this->showAllotForm = true;
    }

    public function allotSit(){
        DB::transaction(function () {
            $member = HostelMember::create([
                'student_id'=> $this->application['student_id'],
                'semester_id'=> $this->semester_id,
                'hostel_id'=> $this->hostel_id,
                'room_no'=> $this->room_no,
                'sit_no'=> $this->sit_no,
            ]);
    
            if ($member!=null) {
                DB::table('hostel_payments')->insert([
                    'semester_id'=> $this->semester_id,
                    'student_id'=> $this->application['student_id'],
                    'hostel_member_id'=> $member->id,
                    'hostel_fee_id'=> 1,
                    'amount'=> 1350,
                    'status'=> PaymentStatus::DUE,
                ]);

                HostelApplicationService::approve($this->application['form_id']);
                $this->alloted = true;
            }

            if($this->alloted){
                $this->dispatchBrowserEvent('hostel-sit-alloted');
                $this->showAllotForm = false;
            }
        });
    }
}
