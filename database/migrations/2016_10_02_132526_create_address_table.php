<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('address', function (Blueprint $table) {
        $table->increments('id');
        $table->string('estado',100);
        $table->string('ciudad',100);
        $table->string('colonia',100);
        $table->string('calle',100);
        $table->integer('numero');
        $table->integer('cp');
        $table->integer('id_usuario')->unsigned();

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
      Schema::dropIfExists('address');
    }
  }
