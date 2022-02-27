<?php

namespace App\Http\Requests\Hostel;

use App\Exceptions\PasswordDoesNotMatchException;
use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProvostLoginRequest extends FormRequest
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
            'email'=> ['required', 'email', 'exists:users'],
            'password'=> ['required'],
        ];
    }

    public function authenticate(){
        try {
            if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
                return true;
            }
        } catch(Exception $ex){
            throw new PasswordDoesNotMatchException();
        }
        return true;
    }
}
