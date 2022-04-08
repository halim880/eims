<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CourseContoller;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\TeacherController;
use App\Http\Controllers\API\UserController;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('result', function (){
    $results = Result::where([
        'student_id'=> request('student_id'),
        'semester_id'=> request('semester_id')
    ])->get();

    return response()->json($results);
});

Route::apiResource('/students', StudentController::class);
Route::apiResource('/teachers', TeacherController::class);
Route::apiResource('/courses', CourseContoller::class);

Route::get('/user', UserController::class);

Route::post('/login', AuthController::class);