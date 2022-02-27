<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AttendanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return Auth::user()->hasRole('teacher');
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
            'course_id' => ['required'],
            'teacher_id' => ['required'],
            'session' => ['required'],
            'data' => ['required'],
        ];
    }

    public function toArray()
    {
        return [
            'course_id' => $this->course_id,
            'teacher_id' => $this->teacher_id,
            'session' => request('session'),
            'data'=> $this->data,
        ];
    }
}
