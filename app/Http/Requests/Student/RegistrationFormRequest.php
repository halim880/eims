<?php

namespace App\Http\Requests\Student;

use App\Models\RegistrationForm;
use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationFormRequest extends FormRequest
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
            'image'=> ['required', 'image', 'mimes:jpg,jpeg,png'],
            'signature'=> ['required', 'image', 'mimes:jpg,jpeg,png'],
        ];
    }

    public function storeForm(){
        if (RegistrationForm::create($this->toArray())) {
            return true;
        }
        else return false;
    }

    public function toArray()
    {
        $student = Student::find($this->student_id);
        return [
            'student_id'=> $this->student_id,
            'semester_id'=> $student->semester_id,
            'department_id'=> $student->department_id,
            'image'=> $this->getImageName(),
            'signature'=> $this->getSignatureName(),
        ];
    }

    private function getImageName(){
        $ext = $this->image->getClientOriginalExtension();
        $name = 'image_' . $this->semester_id . $this->student_id;
        return $name.'.'.$ext;
    }
    private function getSignatureName(){
        $ext = $this->image->getClientOriginalExtension();
        $name = 'signature_' . $this->semester_id . $this->student_id;
        return $name.'.'.$ext;
    }

    public function storeImage(){
        $this->image->move(RegistrationForm::getImagePath(), $this->getImageName());
    }
    public function storeSignature(){
        $this->signature->move(RegistrationForm::getSignaturePath(), $this->getSignatureName());
    }
}
