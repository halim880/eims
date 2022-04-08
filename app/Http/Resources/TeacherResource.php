<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    public static $wrap = "teacher";
    
    
    public function toArray($request)
    {
        return [
            "id" => $this->id(),
            "name" => $this->name(),
            "email"=> $this->email(),
            "phone" => $this->phone(),
            "father_name" => $this->fatherName(),
            "mother_name" => $this->motherName(),
            "current_address" => $this->currentAddress(),
            "permanent_address"=> $this->permanentAddress(),
            "department" => new DepartmentResource($this->department),
        ];
    }
}
