<?php

namespace App\Http\Requests\Teacher;

use App\Models\Department;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class TeacherSignupRequest extends FormRequest
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
            'email'=> ['required', 'email', 'unique:users'],
            'nid'=> ['required', 'numeric', 'digits:10','unique:teachers'],
            'department'=> ['required'],
            'dob'=> ['required'],
            'phone'=> ['required'],
            'father_name'=> ['required'],
            'mother_name'=> ['required'],
            'current_address'=> ['required'],
            'permanent_address'=> ['required'],
            'image'=> ['required', 'image', 'mimes:jpg,jpeg,png', 'max:100'],
            'password'=> ['required']
        ];
    }

    public function toArray(){
        return [
            'user_id'=> $this->getStudentUserId(),
            'department_id'=> $this->getDepartmentId(),
            'dob'=> $this->dob,
            'nid'=> $this->nid,
            'phone'=> $this->phone,
            'father_name'=> $this->father_name,
            'mother_name'=> $this->mother_name,
            'current_address'=> $this->current_address,
            'permanent_address'=> $this->permanent_address,
            'image'=> $this->getImageName(),
        ];
    }

    private function getStudentUserId(){
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        $user->assignRole('teacher');
        return $user->id;
    }

    public function storeImage(){
        $this->image->move(Teacher::profileImageDirectory(), $this->getImageName());
    }

    private function getImageName(){
        return 'teacher_'.$this->nid.'.'.$this->image->getClientOriginalExtension();
    }

    private function getDepartmentId(){
        return Department::where('name', $this->department)->first()->id;
    }
}
