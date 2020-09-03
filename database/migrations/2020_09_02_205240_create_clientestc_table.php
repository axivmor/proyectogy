<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientestcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientestc', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_socio');
            $table->string('nombre', 30);
            $table->string('apellido1', 30);
            $table->string('apellido2', 30);
            $table->integer('tc');
            $table->date('fch_con');
            $table->decimal('monto', 10, 2);
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
        Schema::dropIfExists('clientestc');
    }
}
