<?php

namespace App\Http\Requests;

use App\Exceptions\PasswordDoesNotMatchException;
use App\Exceptions\TeacherNotFoundException;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherLoginRequest extends FormRequest
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
            'email'=> ['required', 'email'],
            'password'=> ['required']
        ];
    }

    public function authenticate(){
        try {
            $user = User::where('email', $this->email)->firstOrFail();
        
            if (Hash::check($this->password, $user->password)) {
                Auth::login($user);
                $this->session()->regenerate();
                return true;
            }
            else return false;
        } catch (ModelNotFoundException $th) {
            throw new TeacherNotFoundException();
        }
    }
}
