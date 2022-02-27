<?php

namespace App\Http\Requests\Student;

use Doctrine\DBAL\Platforms\Keywords\DB2Keywords;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class HostelSeatApplicationRequest extends FormRequest
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
            "student_id"=> ['required'],
            "current_address"=> ['required'],
            "father_occupation"=> ['required'],
            "yearly_income"=> ['required'],
            'reason_for_hostel_seat'=> ['nullable'],
        ];
    }

    public function toArray()
    {
        return [
            'student_id'=> request('student_id'),
            'current_address'=> request('current_address'),
            'father_occupation'=> request('father_occupation'),
            'yearly_income'=> request('yearly_income'),
            'reason_for_hostel_seat'=> request('reason_for_hostel_seat'),
        ];
    }

    public function store(){
        return DB::table('applications_for_hostel_seats')->insert($this->toArray());
    }
}
