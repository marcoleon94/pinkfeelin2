<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('buys', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_usuario')->unsigned();
        $table->decimal('importe',5,2);
        $table->timestamps();

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
      Schema::dropIfExists('buys');
    }
}
