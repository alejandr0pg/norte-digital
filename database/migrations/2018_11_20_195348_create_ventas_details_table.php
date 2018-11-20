<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('sub_total');
            $table->integer('venta_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas_details');
    }
}
