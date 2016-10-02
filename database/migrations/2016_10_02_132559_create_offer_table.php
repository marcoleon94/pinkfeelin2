<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('offers', function (Blueprint $table) {
        $table->increments('id');
        $table->string('descripcion',50);
        $table->decimal('descuento',5,2);
        $table->integer('id_producto')->unsigned();

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
      Schema::dropIfExists('offers');
    }
}
