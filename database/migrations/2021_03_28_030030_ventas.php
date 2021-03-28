<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ventas', function (Blueprint $table)
        {
            $table->increments('id');
            $table->double('CodVenta', 50);
            $table->timestamp('Fecha');  
            $table->double('Total', 50);
            $table->double('CodCliente', 50);
            $table->string('CodProducto', 100);
           
           
           
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ventas');
    }
}
