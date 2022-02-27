<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'applications';
    protected $guarded = [];

    public function approve(){
        $this->status = 'approved';
        return $this->save();
    }

    public function reject(){
        $this->status = 'rejected';
        $this->save();
    }

    public function inAuthorize(){
        $this->status = 'in_authorization';
        $this->save();
    }

    public static function applyFor($model){
        return self::create([
            'status'=>'recieved',
            'type' => get_class($model),
            'type_id'=> $model->id,
        ]);
    }

    public function form(){
        return $this->type::findOrfail($this->type_id);
    }

    public function getEmail(){
        return $this->form()->email;
    }
}
