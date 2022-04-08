<?php

namespace App\Models\Academic;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function id() : int {
        return (int) $this->id;
    }

    public function name() : string {
        return (string) $this->name;
    }

    public function shortForm() : string{
        return (string) $this->short_form;
    }
}
