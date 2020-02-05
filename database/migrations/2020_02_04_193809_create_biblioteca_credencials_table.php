<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliotecaCredencialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblioteca_credencials', function (Blueprint $table) {
            $table->bigInteger('cedula');
            $table->string('nombre', 80);
            $table->string('correo_institucional')->unique();
            $table->string('usuario_medellin')->unique();            
            $table->string('password_medellin', 80);
            $table->integer('estado');
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
        Schema::dropIfExists('biblioteca_credencials');
    }
}
