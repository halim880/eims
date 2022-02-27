<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];

    public const IMAGE_DIRECTORY = 'public/image/events';

    public static function getImagePath(){
        return storage_path(self::IMAGE_DIRECTORY).'/';
    }

    public function getImagePathAttribute(){
        return self::getImagePath().$this->image;
    }
}
