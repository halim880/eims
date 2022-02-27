<?php

use App\Helpers\CourseType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_exam_registration', function (Blueprint $table) {
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('exam_id')->references('id')->on('exams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->string('course_type')->default(CourseType::REGULAR);
            $table->timestamps();
            $table->primary(['student_id', 'course_id', 'exam_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_exam_registration');
    }
};
