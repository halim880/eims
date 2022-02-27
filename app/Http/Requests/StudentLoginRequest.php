<?php

namespace App\Http\Requests;

use App\Exceptions\PasswordDoesNotMatchException;
use App\Exceptions\StudentNotFoundException;
use App\Models\Student;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentLoginRequest extends FormRequest
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
            'id'=> ['required', 'numeric', 'exists:students'],
            'password'=> ['required', 'min:4'],
        ];
    }


    
    public function authenticate(){
        try {
            if (Hash::check($this->password, $this->getStudentUser()->password)) {
                Auth::login($this->getStudentUser(), $this->remember);
                $this->session()->regenerate();
            } 
            else {
                throw new PasswordDoesNotMatchException();
            }
        } catch (ModelNotFoundException $th) {
            throw new StudentNotFoundException();
        }
        return true;
    }

    public function getStudentUser(){
        return Student::findOrFail($this->id)->user;
    }
}
