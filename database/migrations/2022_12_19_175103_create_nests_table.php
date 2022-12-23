<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nest');
            $table->string('name')->nullable();
            $table->string('type');
            $table->string('category');
            $table->string('condition')->nullable();
            $table->integer('price');
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->string('image');
            $table->string('tag')->nullable();
            $table->double('latitude')->default(-1.2037128);
            $table->double('longitude')->default(36.9609399);
            $table->string('unique');
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
        Schema::dropIfExists('nests');
    }
}
