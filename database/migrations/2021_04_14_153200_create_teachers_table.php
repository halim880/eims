<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('designation');
            $table->string('phone');
            $table->string('nid');
            $table->string('dob');
            $table->enum('gender', ['male', 'famale', 'others']);
            $table->string('blood_group')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->foreignId('department_id')->references('id')->on('departments');
            $table->string('current_address');
            $table->string('permanent_address');
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
        Schema::dropIfExists('teachers');
    }
}
