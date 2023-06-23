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
            $table->string('desc_produto');
            $table->string('url_imagem');
            $table->integer('total_vendas');
            $table->integer('total_visitas');
            $table->decimal('valor_produto',8,2);
            $table->timestamps();
        });

        DB::table('produtos')->insert(array(
            ['cat_produto' => '1013', 'cat_fabricante' => '1', 'nome_produto' => 'Ryzen 5 3600x', 'desc_produto' => 'Processador', 'url_imagem' => 'https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/1/0/100-100000031sbx.jpg', 'total_vendas' => '0', 'total_visitas' => '0', 'valor_produto' => '888.66'],
            ['cat_produto' => '1015', 'cat_fabricante' => '1', 'nome_produto' => 'Ryzen 9 3900x', 'desc_produto' => 'Processador', 'url_imagem' => 'https://i.zst.com.br/thumbs/12/2/16/1951347891.jpg', 'total_vendas' => '0', 'total_visitas' => '0', 'valor_produto' => '1696.62'],


        ));
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
