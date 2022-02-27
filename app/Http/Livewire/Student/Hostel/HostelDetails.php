<?php

namespace App\Http\Livewire\Student\Hostel;

use App\ViewModel\HostelPaymentView;
use App\ViewModel\HostelStudentView;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HostelDetails extends Component
{
    public $payments;
    public $hostelDetails;

    public function render()
    {
        $student_id = Auth::user()->student->id;
        $this->payments = HostelPaymentView::where('student_id', $student_id)->first();
        $this->hostelDetails = HostelStudentView::where('student_id', $student_id)->first();
        return view('livewire.student.hostel.hostel-details');
    }
}
