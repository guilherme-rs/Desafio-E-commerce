<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItempedidosProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itempedidos_produtos', function (Blueprint $table) {
            $table->integer('itempedido_id')->unsigned();
            $table->foreign('itempedido_id')
                ->references('id')
                ->on('itempedidos')
                ->onDelete('cascade');

            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')
                ->references('id')
                ->on('produtos')
                ->onDelete('cascade');

            $table->primary(['itempedido_id', 'produto_id']);
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
        Schema::dropIfExists('itempedidos_produtos');
    }
}
