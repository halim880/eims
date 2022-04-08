<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentCollection extends ResourceCollection
{
    public static $wrap = "students";
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
