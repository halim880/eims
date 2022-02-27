<?php

use App\Helpers\ApplicationStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('semester_id')->references('id')->on('semesters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('department_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('current_address');
            $table->string('permanent_address');
            $table->boolean('is_residential')->default(true);
            $table->string('status')->default(ApplicationStatus::SUBMITTED);
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
        Schema::dropIfExists('registration_forms');
    }
}
