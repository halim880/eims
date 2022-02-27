<?php

namespace App\Http\Requests;

use App\Exceptions\StudentNotFoundException;
use App\Models\IssueBook;
use App\Models\Student;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Http\FormRequest;

class IssueBookRequest extends FormRequest
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
            'book_id'=> ['required', 'numeric'],
            'book_code'=> ['required', 'string'],
            'issue_date'=> ['required'], 
            'return_date'=> ['required'], 
        ];
    }

    public function checkStudentExists(){
        try {
            Student::findOrFail($this->student_id);
            return true;

        } catch (ModelNotFoundException $th) {
            throw new StudentNotFoundException();
            
        }
    }
}
