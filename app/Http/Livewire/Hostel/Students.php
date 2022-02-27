<?php

namespace App\Http\Livewire\Hostel;

use App\Models\HostelMember;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Students extends Component
{
    public $students;

    public bool $showTable = true;

    public function render()
    {
        $this->refresh();
        return view('livewire.hostel.students');
    }

    private function refresh(){
        $this->students = Auth::user()->provost->hostel->students()->orderBy('student_id')->get();
    }

}
