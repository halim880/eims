<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public const IMAGE_DIRECTORY = 'public/material/image/books';

    public function increase(){
        $this->available++;
        $this->save();
    }
    public function decrease(){
        $this->available--;
        $this->save();
    }

    public static function getImagePath(){
        return storage_path(self::IMAGE_DIRECTORY).'/';
    }

    public function getImagePathAttribute(){
        return $this->getImagePath().$this->image;
    }

    public static function boot() {
        parent::boot();

        self::creating(function ($book) {
        $book->available = $book->total;
    });
}
}
