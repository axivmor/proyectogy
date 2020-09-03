<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosclienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productoscliente', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_cliente');
            $table->integer('cod_producto');
            $table->string('descripcion', 20);
            
            $table->timestamps();

            $table->foreign('cod_cliente')->references('id')->on('clientes');
            $table->foreigh('cod_producto')->references('id')->on('prodcutos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productoscliente');
    }
}
