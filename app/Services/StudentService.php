<?php
namespace App\Services;

use App\Helpers\ApplicationStatus;
use App\Http\Livewire\Admin\Student\StudentEntry;
use App\Models\AdmissionApplications;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\DB;

class StudentService {
    public static function getAllStudent() : array {
        return StudentRepository::getAllStudent();
    }

    public static function applyForHostelSit(array $application) : bool{
       return StudentRepository::applyForHostelSit($application);
    }

    public static function storeStudent(array $form) : bool {
        if (StudentRepository::storeStudent($form)) {
            DB::table('admission_applications')->where('id', $form['id'])->update([
                'status'=> ApplicationStatus::APROVED
            ]);

            return true;
        }
        return false;
    }

    public static function studentEntry($student) : bool{
        return StudentRepository::storeStudent($student);
    }
}