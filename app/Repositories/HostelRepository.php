<?php
namespace App\Repositories;

use App\Helpers\ApplicationStatus;
use App\ViewModel\HostelPaymentView;
use Illuminate\Support\Facades\DB;
use stdClass;

class HostelRepository {
    public static function getAllApplications() : array {
        try {
            return DB::select("SELECT * FROM hostel_applications_view");
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public static function getApplicationByFormId(int $form_id) :stdClass {
        try {

            return DB::select("SELECT * FROM hostel_applications_view WHERE form_id ='$form_id'")[0];
            
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public static function approve(int $form_id) : bool{
        try {
            DB::table('hostel_sit_applications')
                ->where('id', $form_id)
                ->update(['status'=> ApplicationStatus::APROVED]);
            return true;
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public static function getPaymentHistoryByStudentID(int $student_id){
        try {
            $data =  HostelPaymentView::select('*')->get();
            dd($data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}