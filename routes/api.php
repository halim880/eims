<?php

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