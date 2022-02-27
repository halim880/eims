<?php
namespace App\Services\Hostel;

use App\Repositories\HostelRepository;
use stdClass;

class HostelService{
    public static function getAllApplications() : array{
        return HostelRepository::getAllApplications();
    }

    public static function getApplicatinByFormId(int $form_id) : array{
        return self::toArray(HostelRepository::getApplicationByFormId($form_id));
    }

    public static function getPaymentHistoryByStudentID($student_id){
        return HostelRepository::getApplicationByFormId($student_id);
    }


    private static function toArray(stdClass $object) : array{
        return [
            'form_id'=> $object->form_id,
            'student_name'=> $object->student_name,
            'department'=> $object->department,
        ];
    }
}