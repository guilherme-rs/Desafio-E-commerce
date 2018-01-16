<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itempedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantidade');
            $table->double('vlr_total', 9,2);

            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');

            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')
                ->references('id')
                ->on('produtos')
                ->onDelete('cascade');

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
        Schema::dropIfExists('item_pedidos');
    }
}
