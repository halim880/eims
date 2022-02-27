<?php

use App\Helpers\PaymentStatus;
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
        Schema::create('registration_fees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->references('id')->on('registration_forms')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->double('amount');
            $table->string('status')->default(PaymentStatus::DUE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration_fees');
    }
};
