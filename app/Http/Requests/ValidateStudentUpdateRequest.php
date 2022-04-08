<?php

namespace App\Http\Requests;

use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ValidateStudentUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $student = Student::find(request()->segment(3));
        return [
            'id'=> ['required', Rule::unique('students', 'id')->ignore($student->id, 'id')],
            'email'=> ['required', 'email', Rule::unique('users', 'email')->ignore($student->email(), 'email')],
            'name'=> ['required'],
            'department_id'=> ['required'],
            'session_id'=> ['required'],
            'semester_id'=> ['required', 'numeric'],
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
            'id'=> $this->id,
            'department_id'=> $this->department_id,
            'session_id'=> request('session_id'),
            'semester_id'=> $this->semester_id,
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
