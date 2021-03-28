<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Factura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Factura', function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamp('Feha');
            $table->string('Nombre_Producto', 100);  
            $table->double('Precio', 50);
            $table->double('Cantidad', 50);
            $table->double('CodigoCliente', 50);
            $table->double('Subtotal', 50);
            $table->double('Isv', 50);
            $table->double('Total', 50);
            
           
        
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
        Schema::dropIfExists('Factura');
        
    }
}
