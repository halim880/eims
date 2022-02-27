<?php

namespace App\Http\Requests;

use App\Models\Payment;
use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'=>['required'],
            'payment_type'=>['required'],
            'payment_type_id'=>['required'],
            'transaction_id'=>['required']
        ];
    }
    
    public function toArray()
    {
        return [
            'user_id'=> $this->user_id,
            'payment_type'=> $this->payment_type,
            'payment_type_id'=> $this->payment_type_id,
            'transaction_id'=> $this->transaction_id,
        ];
    }

    public function store(){
        Payment::create($this->toArray());
    }
}
