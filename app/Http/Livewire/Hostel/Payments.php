<?php

namespace App\Http\Livewire\Hostel;

use App\ViewModel\HostelPaymentView;
use Livewire\Component;

class Payments extends Component
{
    public $payments;
    public function render()
    {
        $this->payments = HostelPaymentView::orderBy('id', 'desc')->get();
        return view('livewire.hostel.payments');
    }
}
