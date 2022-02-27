<?php

namespace App\Http\Requests\Student;

use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class StudentSignupRequest extends FormRequest
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
            'id'=> ['required', 'numeric', 'digits:10','unique:students'],
            'email'=> ['required', 'email', 'unique:users'],
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
            'image'=> ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:100'],
        ];
    }

    public function toArray(){
        return [
            'id'=> $this['id'],
            'user_id'=> $this->getStudentUserId(),
            'department_id'=> $this->getDepartmentId(),
            'session'=> request('session'),
            'semester_id'=> $this->semester_id,
            'dob'=> $this->dob,
            'phone'=> $this->phone,
            'blood_group'=> $this->blood_group,
            'father_name'=> $this->father_name,
            'mother_name'=> $this->mother_name,
            'current_address'=> $this->current_address,
            'permanent_address'=> $this->permanent_address,
        ];
    }

    private function getStudentUserId(){
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->image = $this->getImageName();
        $user->password = Hash::make($this->password);
        $user->save();
        $user->assignRole('student');
        return $user->id;
    }

    private function getImageName(){
        return 'student_'.$this->id.'.'.$this->image->getClientOriginalExtension();
    }

    private function getDepartmentId(){
        return Department::where('name', $this->department)->first()->id;
    }

    public function storeImage(){
        $this->image->move(Student::profileImageDirectory(), $this->getImageName());
    }
}

