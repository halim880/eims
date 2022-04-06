<?php
namespace App\Repositories;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminRepository {
    static public function storeTeacher(array $teacher) : bool {
        try{
            DB::transaction(function () use ($teacher) {
                $user = User::create([
                    'name'=> $teacher['name'],
                    'email'=> $teacher['email'],
                    'password'=> bcrypt('passowrd')
                ]);

                Teacher::create([
                    'user_id'=> $user->id,
                    'designation'=> $teacher['designation'],
                    'father_name'=> $teacher['father_name'],
                    'mother_name'=> $teacher['mother_name'],
                    'nid'=> $teacher['nid'],
                    'phone'=> $teacher['phone'],
                    'dob'=> $teacher['dob'],
                    'department_id'=> $teacher['department_id'],
                    'current_address'=> $teacher['current_address'],
                    'permanent_address'=> $teacher['permanent_address'],
                    'image'=> ""
                ]);
            });
            return true;
        } catch (\Throwable $th){
            dd($th);
            return false;
        }
    }
}