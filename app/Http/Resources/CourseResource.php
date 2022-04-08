<?php

namespace App\Http\Resources;

use App\Models\Academic\Department;
use App\Models\Academic\Semester;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public static $wrap = "course";

    public function toArray($request)
    {
        return [
            'id'=> $this->id(),
            'title'=> $this->title(),
            'code' => $this->code(),
            'credit'=> $this->credit(),
            'semester'=> new SemesterResource($this->semester),
            'department'=> new DepartmentResource($this->department)
        ];
    }
}
