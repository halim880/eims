<?php

namespace App\Http\Livewire\Hostel;

use App\Helpers\PaymentStatus;
use App\Models\HostelMember;
use App\ViewModel\HostelPaymentView;
use App\ViewModel\HostelStudentView;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Students extends Component
{
    public $students;
    public $student;
    public $payments;

    public $query;

    public bool $showTable = true;

    public function render()
    {
        $this->refresh();
        return view('livewire.hostel.students');
    }

    private function refresh(){
        $this->students = HostelStudentView::all();
    }

    public function showStudent(int $student_id){
        $this->student = HostelStudentView::where('student_id', $student_id)->first();
        $this->loadData();
        $this->showTable = false;
    }

    public function paymentReceive($id){
        DB::table('hostel_payments')->where('id', $id)->update([
            'status'=> PaymentStatus::PAID,
        ]);

        $this->loadData();

        $this->dispatchBrowserEvent('payment_received');
    }

    public function back(){
        $this->showTable = true;
    }

    private function loadData(){
        $this->payments = HostelPaymentView::where('student_id', $this->student->student_id)->get();
    }

    public function deallocate(){
        return;
    }

    // public function searchStudent(){
    //     $this->students = HostelStudentView::search($this->query)->get();
    // }
}
