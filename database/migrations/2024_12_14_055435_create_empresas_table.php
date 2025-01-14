<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('nombre'); // Nombre de la empresa
            $table->string('direccion'); // Dirección de la empresa
            $table->string('telefono')->nullable(); // Teléfono opcional
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
