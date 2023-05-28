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
        Schema::create('lista_estados', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome_estado');
            $table->string('uf', 2);
        });

        DB::table('lista_estados')->insert(
            array(
                ['nome_estado' => 'Acre', 'uf' => 'AC'],
                ['nome_estado' => 'Alagoas', 'uf' => 'AL'],
                ['nome_estado' => 'Amazonas', 'uf' => 'AM'],
                ['nome_estado' => 'Amapá', 'uf' => 'AP'],
                ['nome_estado' => 'Bahia', 'uf' => 'BA'],
                ['nome_estado' => 'Ceará', 'uf' => 'CE'],
                ['nome_estado' => 'Distrito Federal', 'uf' => 'DF'],
                ['nome_estado' => 'Espírito Santo', 'uf' => 'ES'],
                ['nome_estado' => 'Goiás', 'uf' => 'GO'],
                ['nome_estado' => 'Maranhão', 'uf' => 'MA'],
                ['nome_estado' => 'Minas Gerais', 'uf' => 'MG'],
                ['nome_estado' => 'Mato Grosso do Sul', 'uf' => 'MS'],
                ['nome_estado' => 'Mato Grosso', 'uf' => 'MT'],
                ['nome_estado' => 'Pará', 'uf' => 'PA'],
                ['nome_estado' => 'Paraíba', 'uf' => 'PB'],
                ['nome_estado' => 'Pernambuco', 'uf' => 'PE'],
                ['nome_estado' => 'Piauí', 'uf' => 'PI'],
                ['nome_estado' => 'Paraná', 'uf' => 'PR'],
                ['nome_estado' => 'Rio de Janeiro', 'uf' => 'RJ'],
                ['nome_estado' => 'Rio Grande do Norte', 'uf' => 'RN'],
                ['nome_estado' => 'Rondônia', 'uf' => 'RO'],
                ['nome_estado' => 'Roraima', 'uf' => 'RR'],
                ['nome_estado' => 'Rio Grande do Sul', 'uf' => 'RS'],
                ['nome_estado' => 'Santa Catarina', 'uf' => 'SC'],
                ['nome_estado' => 'Sergipe', 'uf' => 'SE'],
                ['nome_estado' => 'São Paulo', 'uf' => 'SP'],
                ['nome_estado' => 'Tocantins', 'uf' => 'TO']
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_estados');
    }
};
