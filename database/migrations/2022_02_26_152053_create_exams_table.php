<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('department_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->date('registration_start_date')->default(Carbon::now());
            $table->date('registration_end_date')->default(Carbon::now()->addDays(10));
            $table->string('status')->default('upcoming');
            $table->boolean('notice_published')->default(true);
            $table->boolean('result_published')->default(false);
            $table->string('pdf_routine')->nullable();
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
        Schema::dropIfExists('exams');
    }
}
