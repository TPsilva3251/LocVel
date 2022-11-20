<?php

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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->unsignedBigInteger('manufacture_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('doors');
            $table->boolean('direction');
            $table->integer('exchange');
            $table->boolean('airbag');
            $table->boolean('abs');
            $table->boolean('glass');
            $table->boolean('air');
            $table->timestamps();

            $table->foreign('manufacture_id')->references('id')->on('manufacturers');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
