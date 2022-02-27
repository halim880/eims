<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'id'=> ['required', 'numeric', 'digits:10'],
            'email'=> ['required', 'email'],
            'name'=> ['required'],
            'department'=> ['required'],
            'session'=> ['required'],
            'semester_id'=> ['required', 'numeric'],
            'dob'=> ['required'],
            'phone'=> ['required'],
            'blood_group'=> ['nullable'],
            'father_name'=> ['required'],
            'mother_name'=> ['required'],
            'current_address'=> ['required'],
            'permanent_address'=> ['required'],
            'image'=> ['required', 'image', 'mimes:jpg,jpeg,png', 'max:100'],
        ];
    }
}
