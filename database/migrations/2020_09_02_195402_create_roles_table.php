<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30)->unique();
            $table->string('descripcion',100)->nullable();
            $table->boolean('condicion')->default(1);
            //$table->timestamps();
        });

        DB::table('roles')->insert(array('id'=>'1','nombre'=>'gycurso01','descripcion'=>'Administrador'));
        DB::table('roles')->insert(array('id'=>'2','nombre'=>'gycurso02','descripcion'=>'Supervisor'));
        DB::table('roles')->insert(array('id'=>'3','nombre'=>'gycurso03','descripcion'=>'Operador'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
