<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->comment('										');
            $table->string('CodigoInterno')->primary();
            $table->string('Descripcion')->nullable();
            $table->decimal('FactorUnidades', 10)->nullable();
            $table->string('CodigoProveedor')->nullable();
            $table->string('ClaveAlterna')->nullable();
            $table->string('NumeroFabricante')->nullable();
            $table->enum('Status', ['Activo', 'Inactivo'])->nullable();
            $table->decimal('Existencias', 10)->nullable();
            $table->integer('ClaveSAT')->nullable();
            $table->string('ClaveUnidad')->nullable();
            $table->dateTime('FechaRegistro')->nullable();
            $table->boolean('Contado')->nullable();
            $table->integer('UnidadEntrada_UnidadID')->index('fk_Productos_Unidades1_idx');
            $table->integer('UnidadSalida_UnidadID1')->index('fk_Productos_Unidades2_idx');
            $table->integer('Usuarios_UsuarioID')->index('fk_Productos_Usuarios1_idx');
            $table->integer('Marcas_MarcaID')->index('fk_Productos_Marcas1_idx');
            $table->integer('Lineas_LineaID')->index('fk_Productos_Lineas1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
