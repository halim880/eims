<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $fillable = [
        'name', 'short_form'
    ];

    public function getAcronymAttribute(){
        $words = explode(" ", $this->name);
        $acronym = "";

        foreach ($words as $w) {
            if ($w=='and') {
                continue;
            }
            $acronym .= $w[0];
        }
        return strtoupper($acronym);
    }
}
