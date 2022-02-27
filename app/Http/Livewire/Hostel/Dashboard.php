<?php

namespace App\Http\Livewire\Hostel;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public int $totalStudents;
    public int $totalRooms;
    public int $totalSit;

    public function render()
    {
        $hostel = Auth::user()->provost->hostel;
        
        $this->totalStudents = $hostel->students()->count();
        $this->totalRooms = $hostel->total_room;
        $this->totalSit = $hostel->total_sit;

        return view('livewire.hostel.dashboard');
    }
}
