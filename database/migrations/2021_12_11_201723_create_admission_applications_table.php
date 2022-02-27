<?php

use App\Helpers\ApplicationStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('admission_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->references('id')->on('sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('dob');
            $table->string('phone');
            $table->text('permanent_address');
            $table->text('current_address');
            $table->string('email')->nullable();

            $table->string('ssc_roll');
            $table->string('ssc_reg');
            $table->string('ssc_group');
            $table->string('ssc_board');
            $table->string('ssc_passing_year');
            $table->string('ssc_gpa');

            $table->string('hsc_roll');
            $table->string('hsc_group');
            $table->string('hsc_reg');
            $table->string('hsc_board');
            $table->string('hsc_passing_year');
            $table->string('hsc_gpa');

            $table->string('status')->default(ApplicationStatus::PENDING);

            $table->string('image')->nullable();
            
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
        Schema::dropIfExists('admission_applications');
    }
}
