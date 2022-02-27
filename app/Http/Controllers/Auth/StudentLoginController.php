<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\PasswordDoesNotMatchException;
use App\Exceptions\StudentNotFoundException;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentLoginRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentLoginController extends Controller
{
    public function login(StudentLoginRequest $request){
        try {
            if ($request->authenticate()) {
                return redirect()->route('student.dashboard');
            };
        } catch (PasswordDoesNotMatchException $th) {
            return redirect()->route('login')->withMessage('Password is incorrect.');
        } catch (StudentNotFoundException $th){
            return redirect()->route('login')->withMessage('Student is Not found.');
        }
    }

    public function loginView(){
        return view('auth.student_login');
    }
}
