<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationForm extends Model
{
    use HasFactory;
    protected $guarded = [];
    public const IMAGE_DIRECTORY = 'public/image/student/registration/image';
    public const SIGNATURE_DIRECTORY = 'public/image/student/registration/signature';

    public static function getImagePath(){
        return storage_path(self::IMAGE_DIRECTORY).'/';
    }
    public static function getSignaturePath(){
        return storage_path(self::SIGNATURE_DIRECTORY).'/';
    }

    public function getImagePathAttribute(){
        return self::getImagePath().$this->image;
    }
    public function getSignaturePathAttribute(){
        return self::getSignaturePath().$this->signature;
    }
}
