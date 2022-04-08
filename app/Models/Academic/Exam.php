<?php

namespace App\Models\Academic;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getResultStatus(){
        if($this->result_published == 1) return "Published";
        return "Not published";
    }
}
