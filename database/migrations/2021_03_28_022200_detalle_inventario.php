<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DetalleInventario', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('Nombre_Producto', 100);
            $table->double('CantidadInicial', 50);  
            $table->double('Precio', 50);
            $table->double('CantidadSalida', 50);
            $table->double('InventarioTotal', 50);
            
           
        
        });
    }
        //
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DetalleInventario');
      
    }
}
