<?php

namespace App\Services;

use App\Repositories\AdminRepository;

class AdminService {
    public static function storeTeacher(array $teacher) : bool {
        return AdminRepository::storeTeacher($teacher);
    }
}