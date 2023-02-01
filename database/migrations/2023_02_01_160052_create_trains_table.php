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
        Schema::create('trains', function (Blueprint $table) {
            $table->integer('id')->unique()->primary();

            $table->string('codice_treno', 32)->unique();
            $table->string('compagnia_treno', 32);
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->time('arrivo_previsto');
            $table->time('partenza_prevista');
            $table->boolean('servizio')->default(true);

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
        Schema::dropIfExists('trains');
    }
};