<?php

namespace App\Models\Academic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $fillable = [
        'name', 'short_form'
    ];

    public function id() : int {
        return (int) $this->id;
    }
    public function name() : string {
        return (string) $this->name;
    }
    public function acronym() :string {
        $words = explode(" ", $this->name);
        $acronym = "";
        foreach ($words as $w) {
            if ($w=='and' || $w=='&') {
                continue;
            }
            $acronym .= $w[0];
        }
        return strtoupper($acronym);
    }
}
