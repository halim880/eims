<?php

namespace App\Http\Livewire\Admin\Admission;

use App\Helpers\SessionAdmissionStatus;
use App\Models\Academic\Session;
use Livewire\Component;

class ManageSession extends Component
{
    public $sessions;
    public $session;

    public bool $showDetails = false;

    public function render()
    {
        $this->sessions = Session::orderBy('id', 'desc')->get();
        return view('livewire.admin.admission.manage-session');
    }

    function show(Session $session){
        $this->showDetails = true;
        $this->session = $session;
    }

    public function close(){
        $this->showDetails = false;
        $this->session = null;
    }

    public function openForAdmission(){
        $this->session->opened_for_admission = true;
        $this->session->admission_status = SessionAdmissionStatus::ONGONOING;
        $this->session->update();

        $this->dispatchBrowserEvent('opened_for_admission');
    }

    public function closeForApplication(){
        $this->session->opened_for_admission = false;
        $this->session->update();
        $this->dispatchBrowserEvent('close_for_application');
    }

    public function openForApplication(){
        $this->session->opened_for_admission = true;
        $this->session->update();
        $this->dispatchBrowserEvent('oponed_for_application');
    }

    public function completeAdmission(){
        $this->session->admission_status = SessionAdmissionStatus::COMPLETED;
        $this->session->update();
        $this->dispatchBrowserEvent('admission_completed');
    }

}
