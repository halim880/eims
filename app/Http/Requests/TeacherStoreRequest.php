<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class TeacherStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'=> ['required', 'email', 'unique:users'],
            'name'=> ['required'],
            'designation'=> ['required'],
            'nid'=> ['required','numeric', Rule::unique('teachers', 'nid')],
            'department_id'=> ['required', Rule::exists('departments', 'id')],
            'dob'=> ['required', 'date'],
            'gender'=> ['required'],
            'phone'=> ['required'],
            'blood_group'=> ['nullable'],
            'father_name'=> ['required'],
            'mother_name'=> ['required'],
            'current_address'=> ['required'],
            'permanent_address'=> ['required'],
            'image'=> ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:100'],
        ];
    }

    public function toArray() : array {
        return [
            'department_id'=> $this->department_id,
            'designation'=> $this->designation,
            'nid'=> $this->nid,
            'dob'=> $this->dob,
            'gender'=> $this->gender,
            'phone'=> $this->phone,
            'blood_group'=> $this->blood_group,
            'father_name'=> $this->father_name,
            'mother_name'=> $this->mother_name,
            'current_address'=> $this->current_address,
            'permanent_address'=> $this->permanent_address,
        ];
    }

    public function toUserArray() : array{
        return [
            'name'=> request('name'),
            'email'=> request('email'),
            'password'=> Hash::make(request('password')),
        ];
    }
}
