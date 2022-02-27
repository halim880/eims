<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmissionApplication extends Model
{
    public const IMAGE_DIRECTORY = 'public/image/admission/applicants';
    use HasFactory;
    protected $guarded = [];

    public function getImagePathAttribute(){
        return self::imageDirectory().'/'.$this->image;
    }

    public static function imageDirectory(){
        return storage_path(self::IMAGE_DIRECTORY);
    }
}
