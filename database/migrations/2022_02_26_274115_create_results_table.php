<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->foreignId('student_id')
                    ->references('id')
                    ->on('students')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreignId('semester_id')
                    ->references('id')
                    ->on('semesters')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

                
            $table->foreignId('course_id')
                    ->references('id')
                    ->on('courses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


            $table->foreignId('exam_id')
                    ->references('id')
                    ->on('exams')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


            $table->double('full_marks');
            $table->double('pass_mark_parcentage')->nullable();
            $table->double('obtained_marks');

            $table->foreignId('stored_by_user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->timestamps();

            $table->primary(['student_id', 'exam_id', 'course_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
