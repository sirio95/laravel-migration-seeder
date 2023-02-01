<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->integer('id')->unique()->primary();

            $table->string('type', 16);
            $table->date('starting_date');
            $table->date('ending_date');
            $table->tinyInteger('adults')->unsigned();
            $table->tinyInteger('children')->unsigned();
            $table->string('location', 32);
            $table->string('price_range', 32);
            $table->integer('price')->unsigned();
            $table->string('extra');
            $table->string('special_notes');

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
        Schema::dropIfExists('travel');
    }
};