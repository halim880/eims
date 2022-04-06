<?php

namespace App\Http\Livewire\Admin\Hostel;

use App\Models\Hostel;
use Livewire\Component;

class ManageHostel extends Component
{
    public $hostel;
    public function render()
    {
        $this->hostel = Hostel::first();
        return view('livewire.admin.hostel.manage-hostel');
    }
}
