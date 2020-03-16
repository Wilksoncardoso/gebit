<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePranchaViagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prancha_viagem', function (Blueprint $table) {
            
            $table->unsignedBigInteger('viagem_id')->nullable()->default(NULL);
            $table->unsignedBigInteger('prancha_id')->nullable()->default(NULL);

            $table ->foreign('viagem_id')->references('id')->on('viagens');
            $table ->foreign('prancha_id')->references('id')->on('pranchas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prancha_viagem');
    }
}
