<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('cat_produto');
            $table->integer('cat_fabricante');
            $table->string('nome_produto');
            $table->string('url_imagem');
            $table->integer('total_vendas');
            $table->integer('total_visitas');
            $table->decimal('valor_produto',8,2);
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
        Schema::dropIfExists('produtos');
    }
};
