<?php

namespace App\Http\Livewire\Student;

use App\ViewModel\HostelStudentView;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    
    public function render()
    {
        return view('livewire.student.dashboard');
    }
}
