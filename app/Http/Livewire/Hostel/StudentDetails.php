<?php

namespace App\Http\Livewire\Hostel;

use App\Helpers\PaymentStatus;
use App\Models\HostelMember;
use App\Services\Hostel\HostelService;
use App\ViewModel\HostelPaymentView;
use App\ViewModel\HostelStudentView;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class StudentDetails extends Component
{
    public $hostelStudent;
    public $student;
    public $payments;

    public function render()
    {
        $this->loadData();
        return view('livewire.hostel.student-details');
    }

    public function mount(HostelMember $hostelMember){
        $this->student = HostelStudentView::where('student_id', $hostelMember->student_id)->first();
    }

    public function paymentReceive($id){
        DB::table('hostel_payments')->where('id', $id)->update([
            'status'=> PaymentStatus::PAID,
        ]);

        $this->loadData();

        $this->dispatchBrowserEvent('payment-received');
    }

    public function delete(){
        // $this->hostelStudent->delete();
        return redirect()->route('hostel.students');
    }

    private function loadData(){
        $this->payments = HostelPaymentView::where('student_id', $this->student->student_id)->get();
    }
}
