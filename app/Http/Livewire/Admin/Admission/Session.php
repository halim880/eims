<?php

namespace App\Http\Livewire\Admin\Admission;

use App\Models\Academic\Session as AcademicSession;
use Livewire\Component;

class Session extends Component
{
    public $session;

    public function render()
    {
        return view('livewire.admin.admission.session');
    }

    public function store(){
        try {
            AcademicSession::create($this->session);

            $this->dispatchBrowserEvent('session_created');
            $this->session = [];
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('invalid_input');
        }
    }
}
