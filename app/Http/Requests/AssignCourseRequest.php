<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class AssignCourseRequest extends FormRequest
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
            'course_id'=> 'required',
            'teacher_id'=> 'required',
        ];
    }

    public function assign(){
        DB::table('course_teacher')->insert([
            'course_id'=> $this->course_id,
            'teacher_id'=> $this->teacher_id,
        ]);
    }
}
