<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TeacherCollection extends ResourceCollection
{
    public static $wrap = "teachers";
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
