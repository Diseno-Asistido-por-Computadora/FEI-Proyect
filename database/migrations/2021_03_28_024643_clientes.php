<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clientes', function (Blueprint $table)
        {
            $table->increments('id');
            $table->double('CodCliente', 50);
            $table->string('Nombre_Cliente', 100);  
            $table->string('Direccion', 50);
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
        Schema::dropIfExists('Clientes');
    }
}
