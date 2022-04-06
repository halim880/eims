<?php

namespace App\Http\Livewire\Admin\Hostel;

use App\Models\Admin\Hostel\HostelFeeSetup as ModelHostelFeeSetup;
use Livewire\Component;

class HostelFeeSetup extends Component
{
    public $setup = null;
    public $setups = [];
    public bool $editMode = false;

    protected $rules = [
        'setup.head_name' => 'required',
        'setup.amount' => 'required|numeric',
    ];

    protected $messages = [
        'setup.head_name.required' => 'Head name cannot be empty.',
        'setup.amount.required' => 'Amount is required',
    ];

    public function render()
    {
        $this->setups = ModelHostelFeeSetup::orderBy('head_name')->get();
        return view('livewire.admin.hostel.fee-setup');
    }

    public function store(){
        $this->validate();

        ModelHostelFeeSetup::create([
            'head_name'=> $this->setup['head_name'],
            'amount'=> $this->setup['amount'],
            'refundable'=> false,
        ]);

        $this->setups = ModelHostelFeeSetup::all();
        $this->setup = null;
    }

    public function edit(ModelHostelFeeSetup $setup){
        $this->editMode = true;
        $this->setup['id'] = $setup->id;
        $this->setup['head_name'] = $setup->head_name;
        $this->setup['amount'] = $setup->amount;
    }

    public function update(){
        $this->validate();

        $setup = ModelHostelFeeSetup::find($this->setup["id"]);
        $setup->head_name = $this->setup['head_name'];
        $setup->amount = $this->setup['amount'];
        $setup->update();

        $this->setups = ModelHostelFeeSetup::orderBy('head_name')->get();
    }

    public function clear(){
        $this->setup = null;
        $this->editMode = false;
    }
}
