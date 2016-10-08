<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nombre',50);
          $table->decimal('precio',6,2);
          $table->integer('tipo');
          $table->string('marca',30);
          $table->string('descripcion',50);
          $table->integer('stock');
          $table->string('imagen');
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
        Schema::dropIfExists('products');
    }
}
