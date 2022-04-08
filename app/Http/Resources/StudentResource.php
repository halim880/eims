<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public static $wrap = "student";
    public function toArray($request)
    {
        return [
            "id" => $this->id(),
            "name" => $this->name(),
            "batch"=> $this->batch(),
            "session"=> $this->sessionName(),
            "type"=> $this->type(),
            "email"=> $this->email(),
            "phone" => $this->phone(),
            "father_name" => $this->fatherName(),
            "mother_name" => $this->motherName(),
            "current_address" => $this->currentAddress(),
            "permanent_address"=> $this->permanentAddress(),
            "running_semester" => new SemesterResource($this->semester),
            "department" => new DepartmentResource($this->department),
        ];
    }

    public function with($request)
    {
        return [
            "status" => "success"
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('Accept', "application/json");
    }
}