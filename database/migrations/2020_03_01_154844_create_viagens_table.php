<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('local')->nullable()->default(NULL);
            $table->unsignedBigInteger('user')->nullable()->default(NULL);
            $table->date('data_ida')->nullable()->default(NULL);
            $table->date('data_volta')->nullable()->default(NULL);


            $table->timestamps();


        $table->foreign('local')->references('id')->on('locais')->onDelete('CASCADE');
        $table->foreign('user')->references('id')->on('users')->onDelete('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viagens');
    }
}
