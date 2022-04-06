<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hostel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function students(){
        return $this->hasMany(HostelMember::class);
    }

    public function employees(){
        return $this->hasMany(HostelEmployee::class);
    }

    public function provost(){
        return $this->employees()->where(['designation', 'Provost'])->first();
    }
}
