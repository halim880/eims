<?php
namespace App\Traits;

use App\Models\Department;
use App\Models\User;
use Carbon\Carbon;

trait UserInfo
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function getNameAttribute(){
        return $this->user->name;
    }

    public function getEmailAttribute(){
        return $this->user->email;
    }
    public function getDateOfBirthAttribute(){
        $date = new Carbon($this->dob);
        return $date->format('j F, Y');
    }

    
    public function getDepartmentNameAttribute(){
        return $this->department->name;
    }

    public function getImagePathAttribute(){
        return self::profileImageDirectory().'/'.$this->image;
    }
}
