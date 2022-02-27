<?php

namespace App\Http\Livewire\Hostel;

use App\Services\Hostel\HostelService;
use Livewire\Component;

class Applications extends Component
{
    public $applications;
    public function render()
    {
        $this->applications = HostelService::getAllApplications();
        return view('livewire.hostel.applications');
    }
}
