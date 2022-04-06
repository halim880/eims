<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on("students")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('hostel_id')->references('id')->on("hostels")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('semester_id')->references('id')->on("hostels")->onDelete('cascade')->onUpdate('cascade');
            $table->integer('room_no');
            $table->integer('sit_no');
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
        Schema::dropIfExists('hostel_members');
    }
}
