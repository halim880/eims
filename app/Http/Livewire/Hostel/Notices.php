<?php

namespace App\Http\Livewire\Hostel;

use App\Models\Hostel\HostelNotice;
use Livewire\Component;

class Notices extends Component
{
    public $notices = [];

    public function render()
    {
        $this->notices = HostelNotice::orderBy('id', 'desc')->get();
        return view('livewire.hostel.notices');
    }
}
