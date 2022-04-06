<?php

namespace App\Http\Livewire\Hostel;

use App\Models\Hostel\HostelNotice;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ManageNotice extends Component
{
    public $states = [];

    public function render()
    {
        return view('livewire.hostel.manage-notice');
    }

    public function store(){
        try {
            HostelNotice::create([
                'title'=> $this->states['title'],
                'content'=> $this->states['content'],
                'user_id'=> Auth::user()->id,
            ]);

            $this->dispatchBrowserEvent('notice_created');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
