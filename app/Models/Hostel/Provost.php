<?php

namespace App\Models\Hostel;

use App\Models\Hostel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provost extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hostel(){
        return $this->belongsTo(Hostel::class);
    }
}
