<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_usuario')->unsigned();
          $table->string('nombre',50);
          $table->string('numero',16);
          $table->integer('mes_exp');
          $table->integer('año_exp');
          $table->integer('codigo');
          $table->string('tipo',10);

          $table->foreign('id_usuario')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('payments');
    }
}
