<?php

namespace App\Http\Livewire\Hostel;

use App\Helpers\PaymentStatus;
use App\Models\Student;
use App\ViewModel\HostelPaymentView;
use Livewire\Component;

class HostelClearance extends Component
{
    public $student;
    public $payments;
    public $student_id;
    public $total_due = 0;

    public function render()
    {
        return view('livewire.hostel.hostel-clearance');
    }

    public function searchIssueByStudentId(){
        $this->student = Student::find($this->student_id);
        $this->payments = HostelPaymentView::where('student_id', $this->student_id)->get();
        $d = 0;
        foreach ($this->payments as $p) {
            if ($p->status==PaymentStatus::DUE) {
                $d+=(int)$p->amount;
            }
        }
        $this->total_due = $d;
    }
}
