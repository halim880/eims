<?php

namespace App\ViewModel;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class HostelStudentView extends Model
{
    use Searchable;
    protected $table = 'hostel_students_view';
}
