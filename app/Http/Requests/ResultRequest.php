<?php

namespace App\Http\Requests;

use App\Models\Result;
use Illuminate\Foundation\Http\FormRequest;

class ResultRequest extends FormRequest
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
            'student_id'=> ['required', 'numeric'],
            'semester_id'=> ['required', 'numeric'],
            'department_id'=> ['required', 'numeric'],
            'result'=> ['required'],
        ];
    }

    public function store(){
        Result::create($this->toArray());
    }

    public function toArray()
    {
        return [
            'student_id'=> $this->student_id,
            'semester_id'=> $this->semester_id,
            'department_id'=> $this->department_id,
            'result'=> $this->result,
        ];
    }
}
