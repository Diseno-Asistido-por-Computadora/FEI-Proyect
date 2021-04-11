<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Compras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Compras', function (Blueprint $table)
        {
            $table->increments('id');
            $table->double('Codcompras', 50);
            $table->string('NomProducto', 100);  
            $table->double('CodProveedor', 50);
            $table->timestamp('Fechacompra');
            $table->double('Precio', 50);
            $table->double('Cantidad', 50);
            $table->double('Total', 50);
           
           
           
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Compras');
    }
}
