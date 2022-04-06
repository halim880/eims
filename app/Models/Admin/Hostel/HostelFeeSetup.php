<?php

namespace App\Models\Admin\Hostel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostelFeeSetup extends Model
{
    use HasFactory;
    protected $table = "hostel_fee_setup";
    protected $guarded = [];
}
