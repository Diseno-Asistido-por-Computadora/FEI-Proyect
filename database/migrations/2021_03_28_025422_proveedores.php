<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Proveedores', function (Blueprint $table)
        {
            $table->increments('id');
            $table->double('CodProveedor', 50);
            $table->string('Nombre_Proveedor', 100);  
            $table->double('NombreEmpresa', 50);
            $table->double('CodProducto', 50);
            $table->string('Direccion', 100);
            $table->string('Email', 100);
            $table->double('Telefono', 50);
           
           
            
           
        
        });
    
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Proveedores');
    }
}
