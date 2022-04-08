<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateCourseStoreRequest extends FormRequest
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
            'code'=> ['required'],
            'title'=> ['required', 'unique:courses'],
            'department_id'=> ['required', Rule::exists('departments', 'id')],
            'semester_id'=> ['required', Rule::exists('semesters', 'id')],
            'credit'=> ['required', 'numeric'],
        ];
    }

    public function toArray(): array
    {
        return [
            'course_code'=> $this->code,
            'title'=> $this->title,
            'department_id' => $this->department_id,
            'semester_id' => $this->semester_id,
            'credit'=> $this->credit,
        ];
    }
}
