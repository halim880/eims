<?php
namespace App\Services\Hostel;

use App\Repositories\HostelRepository;
use stdClass;

class HostelApplicationService{
    public static function getAllApplications() : array{
        return HostelRepository::getAllApplications();
    }

    public static function getApplicatinByFormId(int $form_id) : array{
        return self::toArray(HostelRepository::getApplicationByFormId($form_id));
    }

    public static function approve(int $form_id) : bool {
        return HostelRepository::approve($form_id);
    }


    private static function toArray(stdClass $object) : array{
        return [
            'form_id'=> $object->form_id,
            'student_name'=> $object->student_name,
            'student_id'=> $object->student_id,
            'department'=> $object->department,
            'session'=> $object->session,
            'semester'=> $object->semester,
            'phone'=> $object->phone,
            'email'=> $object->email,
            'father_name'=> $object->father_name,
            'father_occupation'=> $object->father_occupation,
            'father_yearly_income'=> $object->father_yearly_income,
            'mother_name'=> $object->mother_name,
            'mother_occupation'=> $object->mother_occupation,
            'mother_yearly_income'=> $object->mother_yearly_income,
            'total_family_member'=> $object->total_family_member,
            'yearly_family_income'=> $object->yearly_family_income,
            'current_address'=> $object->current_address,
            'permanent_address'=> $object->permanent_address,
        ];
    }
}