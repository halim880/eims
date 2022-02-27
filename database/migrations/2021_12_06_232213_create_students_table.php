<?php

use App\Helpers\StudentType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('department_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('session_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dob');
            $table->string('phone');
            $table->string('blood_group')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('current_address');
            $table->string('permanent_address');
            $table->string('type')->default(StudentType::ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
