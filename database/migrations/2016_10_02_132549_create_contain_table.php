<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contains', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_compra')->unsigned();
        $table->integer('id_producto')->unsigned();
        $table->integer('cantidad');

        $table->foreign('id_compra')->references('id')->on('buys');
        $table->foreign('id_producto')->references('id')->on('products');
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
      Schema::dropIfExists('contains');
    }
}
