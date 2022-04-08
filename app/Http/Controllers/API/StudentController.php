<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateStudentStoreRequest;
use App\Http\Requests\ValidateStudentUpdateRequest;
use App\Http\Resources\StudentCollection;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        return new StudentCollection(Student::all());
    }

    public function create()
    {
        //
    }

    public function store(ValidateStudentStoreRequest $request)
    {
        try {
            DB::transaction(function() use ($request){
                $user = User::create($request->toUserArray());
                Student::create(array_merge(
                    ['user_id'=> $user->id],
                    $request->toArray()
                ));
            });

            $student = Student::orderBy('created_at', 'desc')->first();
            return new StudentResource($student);

        } catch (\Throwable $th) {
            return response()->json(['message'=> $th]);
        }
    }

    public function show(Student $student)
    {
        return (new StudentResource($student));
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(ValidateStudentUpdateRequest $request, Student $student)
    {
        try {
            DB::transaction(function() use ($request, $student){
                $student->user()->update($request->toUserArray());
                $student->update($request->toArray());
            });

            return new StudentResource($student->fresh());
        } catch (\Throwable $th) {
            return response()->json(['message'=> $th]);
        }
    }

    public function destroy(Student $student)
    {
        try {
            DB::transaction(function() use ($student){
                $student->user()->delete();
                $student->delete();
            });
            return response([
                "message"=> "Student has been deleted",
            ], 200);
        } catch (\Throwable $th) {
            return response([
                "message"=> "Failed to delete student",
            ], 500);
        }
    }
}
