<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library_credentials', function (Blueprint $table) {
            $table->bigInteger('cedula');
            $table->string('nombre', 80);
            $table->string('correo_institucional', 80);
            $table->string('usuario_medellin', 80);
            $table->string('contrasena_medellin', 80);
            $table->string('estado', 80);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library_credentials');
    }
}
