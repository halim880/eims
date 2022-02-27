<?php
namespace App\Helpers;

use App\Models\Academic\Session;
use App\Models\Student;
use Brick\Math\BigInteger;
use Ramsey\Uuid\Type\Integer;

class StudentIdGenerator{
    static public function generate($session_id, $department_id, $serial = 0) : int {

        $session = Session::find($session_id);

        $lastAdmitted = (int) Student::orderBy('id', 'desc')->where([
            'department_id'=> $department_id,
            'session_id'=> $session_id,
        ])->pluck('id')->first();

        // dd($lastAdmitted);

        if (is_null($lastAdmitted) || $lastAdmitted==0) {
            return (int) (substr($session->name, 0, 4).$department_id."501");
        }
        return ($lastAdmitted + 1);
    }
}