<?php

namespace App\Http\Requests;

use App\Models\AdmissionApplication;
use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            'name'=> ['required'],
            'dob'=> ['required'],
            'phone'=> ['required','numeric'],
            'district'=> ['nullable'],
            'father_name'=> ['required'],
            'mother_name'=> ['required'],
            'email'=> ['required', 'email'],
            'ssc_roll'=> ['required'],
            'ssc_reg'=> ['required'],
            'ssc_board'=> ['required'],
            'hsc_roll'=> ['required'],
            'hsc_reg'=> ['required', 'unique:admission_applications'],
            'hsc_board'=> ['required'],
            'image'=> ['required', 'image', 'mimes:jpg,jpeg,png', 'max:100'],
        ];

    }

    public function toArray()
    {
        return [
            'name'=> $this->name,
            'father_name'=> $this->father_name,
            'mother_name'=> $this->mother_name,
            'dob'=> $this->dob,
            'phone'=> $this->phone,
            'email'=> $this->email,
            'district'=> $this->district,
            'image'=> $this->getImageName(),
            'ssc_roll'=> $this->ssc_roll,
            'ssc_reg'=>$this->ssc_reg,
            'ssc_board'=> $this->ssc_board,
            'hsc_roll'=> $this->hsc_roll,
            'hsc_reg'=>$this->hsc_reg,
            'hsc_board'=> $this->hsc_board,
        ];
    }

    private function getImageName(){
        return 'applicant_'.$this['hsc_reg'].'.'.$this->image->getClientOriginalExtension();
    }

    public function storeImage(){
        $this->image->move(AdmissionApplication::imageDirectory(), $this->getImageName());
    }
}
