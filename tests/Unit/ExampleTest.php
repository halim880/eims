<?php

namespace Tests\Unit;

use App\Helpers\StudentIdGenerator;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $id = StudentIdGenerator::generate(4, 103);

        dd($id);
    }
}
