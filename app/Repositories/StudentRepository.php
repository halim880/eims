<?php
namespace App\Repositories;

use App\Helpers\StudentIdGenerator;
use App\Helpers\UserRole;
use App\Models\Student;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;

class StudentRepository {
    public static function getAllStudent() : array {
        return DB::select('CALL get_all_students()');
    }

    public static function applyForHostelSit(array $application) : bool{
        try{
            DB::table('hostel_sit_applications')->insert($application);
            return true;
        }
        catch (Exception $ex){
            dd($ex);
            return false;
        }
    }

    public static function storeStudent(array $array) : bool {
        try {
            DB::transaction(function() use($array){
                $user = User::create([
                    'name'=> $array["student_name"],
                    'email'=> $array["email"],
                    'password'=> bcrypt('password'),
                ]);
    
                Student::create([
                    'id'=> $array['student_id'],
                    'user_id'=> $user->id,
                    'department_id'=> $array['department_id'],
                    'semester_id'=> $array['semester_id'],
                    'session_id'=> $array['session_id'],
                    'dob'=> $array['dob'],
                    'phone'=> $array['phone'],
                    'father_name'=> $array['father_name'],
                    'mother_name'=> $array['mother_name'],
                    'current_address'=> $array['current_address'],
                    'permanent_address'=> $array['permanent_address'],
                ]);
    
                $user->assignRole(UserRole::STUDENT);
            });
            return true;
        } 
        catch (\Throwable $th) {
            dd($th);
        }
    }
}