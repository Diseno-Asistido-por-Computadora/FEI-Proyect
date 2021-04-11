<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
        Schema::create('Productos', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('Nombre_Productos', 100);
            $table->double('CodProveedores', 50);
            $table->string('Descripcion', 50);  
            $table->timestamp('Fecha_ingreso');
            $table->string('Existencia', 50);
            
           
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Productos');
        //
    }
}
