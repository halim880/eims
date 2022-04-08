<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherStoreRequest;
use App\Http\Requests\TeacherUpdateRequest;
use App\Http\Resources\TeacherCollection;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new TeacherCollection(Teacher::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherStoreRequest $request)
    {
        try {
            DB::transaction(function() use ($request){
                $user = User::create($request->toUserArray());
                Teacher::create(array_merge(
                    ['user_id'=> $user->id],
                    $request->toArray()
                ));
            });

            $teacher = Teacher::orderBy('created_at', 'desc')->first();
            return new TeacherResource($teacher);

        } catch (\Throwable $th) {
            return response()->json(['message'=> $th]);
        }
    }


    public function show(Teacher $teacher)
    {
        return new TeacherResource($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherUpdateRequest $request, Teacher $teacher)
    {
        try {
            DB::transaction(function() use ($request, $teacher){
                $teacher->user()->update($request->toUserArray());
                $teacher->update($request->toArray());
            });

            return new TeacherResource($teacher->fresh());
        } catch (\Throwable $th) {
            return response()->json(['message'=> $th]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        try {
            DB::transaction(function() use ($teacher){
                $teacher->user()->delete();
                $teacher->delete();
            });
            return response([
                "message"=> "Teacher has been deleted",
            ], 200);
        } catch (\Throwable $th) {
            return response([
                "message"=> "Failed to delete teacher",
            ], 500);
        }
    }
}
