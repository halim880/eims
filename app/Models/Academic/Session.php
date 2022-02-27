<?php

namespace App\Models\Academic;

use App\Helpers\SessionAdmissionStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getBatchAttribute() : string {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($this->batch_number % 100) >= 11) && (($this->batch_number%100) <= 13))
            return $this->batch_number. 'th';
        else
            return $this->batch_number. $ends[$this->batch_number % 10];
    }

    public function canBeOponedAForAdmission() : bool {
        if($this->admission_status == SessionAdmissionStatus::COMPLETED) return false;
        if($this->admission_status == SessionAdmissionStatus::ONGONOING) return false;
        return true;
    }

    public function openedForAdmission() : bool {
        return $this->opened_for_admission == 1;
    }
}
