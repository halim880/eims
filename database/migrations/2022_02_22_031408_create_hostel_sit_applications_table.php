<?php

use App\Helpers\ApplicationStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hostel_sit_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->string('father_occupation');
            $table->double("father_yearly_income");
            $table->string('mother_occupation');
            $table->double("mother_yearly_income");
            $table->double("total_family_member");
            $table->double("yearly_family_income");
            $table->text('current_address');
            $table->text('permanent_address');
            $table->string('status')->default(ApplicationStatus::PENDING);
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
        Schema::dropIfExists('hostel_sit_applications');
    }
};
