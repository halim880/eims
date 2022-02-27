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
        Schema::create('hostel_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semester_id')->references('id')->on('semesters')->onDelete('cascade');
            $table->foreignId('hostel_member_id')->references('id')->on('hostel_members')->onDelete('cascade');
            $table->integer('amount');
            $table->string('status')->default(PaymentStatus::DUE);
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
        Schema::dropIfExists('hostel_payments');
    }
};
