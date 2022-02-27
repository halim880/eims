<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Log;

class RoleNotFoundException extends Exception
{
    private $errorMessage;
    public function __construct($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function report(){
        Log::debug($this->errorMessage);
    }
}
