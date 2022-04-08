<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CourseCollection extends ResourceCollection
{
    public static $wrap = "courses";
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}