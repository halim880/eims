<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('author');
            $table->string('category')->nullable();
            $table->string('image')->nullable();
            $table->text('details')->nullable();
            $table->double('price');
            $table->integer('available')->nullable();
            $table->integer('total_quantity');
            $table->integer('rack_no');
            $table->integer('row_no');
            $table->integer('col_no');
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
        Schema::dropIfExists('books');
    }
}
