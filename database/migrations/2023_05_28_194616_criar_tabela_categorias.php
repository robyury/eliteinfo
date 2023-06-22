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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('cat_id');
            $table->integer('super_cat_id')->nullable();
            $table->string('cat_nome');
            $table->boolean('tem_subcat');
        });

        DB::table('categorias')->insert(array(

            //Categorias Principais (Suporta até 999 categorias)

            ['cat_id' => '1', 'super_cat_id' => NULL, 'cat_nome' => 'Processador', 'tem_subcat' => true],
            ['cat_id' => '2', 'super_cat_id' => NULL, 'cat_nome' => 'Placa Mãe', 'tem_subcat' => true],
            ['cat_id' => '3', 'super_cat_id' => NULL, 'cat_nome' => 'Memória RAM', 'tem_subcat' => true],
            ['cat_id' => '4', 'super_cat_id' => NULL, 'cat_nome' => 'Armazenamento', 'tem_subcat' => true],
            ['cat_id' => '5', 'super_cat_id' => NULL, 'cat_nome' => 'Fonte', 'tem_subcat' => true],
            ['cat_id' => '6', 'super_cat_id' => NULL, 'cat_nome' => 'Placa de Expansão', 'tem_subcat' => true],
            ['cat_id' => '7', 'super_cat_id' => NULL, 'cat_nome' => 'Rede e Internet', 'tem_subcat' => true],
            ['cat_id' => '8', 'super_cat_id' => NULL, 'cat_nome' => 'Gabinetes', 'tem_subcat' => true],
            ['cat_id' => '9', 'super_cat_id' => NULL, 'cat_nome' => 'Periféricos', 'tem_subcat' => true],
            ['cat_id' => '10','super_cat_id' => NULL, 'cat_nome' => 'Outros', 'tem_subcat' => false],

            //Subcategorias (Começam pelo ID e cada categoria, suportam 999 subcategorias.
            //Exemplo: 1001 = 1 (Processador) 001 -> (Primeira subcategoria)

            //Subcategoria Processadores
            ['cat_id' => '1001', 'super_cat_id' => '1', 'cat_nome' => 'Pentium', 'tem_subcat' => false],
            ['cat_id' => '1002', 'super_cat_id' => '1', 'cat_nome' => 'Celeron', 'tem_subcat' => false],
            ['cat_id' => '1003', 'super_cat_id' => '1', 'cat_nome' => 'Xeon', 'tem_subcat' => false],
            ['cat_id' => '1004', 'super_cat_id' => '1', 'cat_nome' => 'i3', 'tem_subcat' => false],
            ['cat_id' => '1005', 'super_cat_id' => '1', 'cat_nome' => 'i5', 'tem_subcat' => false],
            ['cat_id' => '1006', 'super_cat_id' => '1', 'cat_nome' => 'i7', 'tem_subcat' => false],
            ['cat_id' => '1007', 'super_cat_id' => '1', 'cat_nome' => 'i9', 'tem_subcat' => false],
            ['cat_id' => '1008', 'super_cat_id' => '1', 'cat_nome' => 'Athlon', 'tem_subcat' => false],
            ['cat_id' => '1009', 'super_cat_id' => '1', 'cat_nome' => 'Sempron', 'tem_subcat' => false],
            ['cat_id' => '1010', 'super_cat_id' => '1', 'cat_nome' => 'Phenom', 'tem_subcat' => false],
            ['cat_id' => '1011', 'super_cat_id' => '1', 'cat_nome' => 'FX', 'tem_subcat' => false],
            ['cat_id' => '1012', 'super_cat_id' => '1', 'cat_nome' => 'Ryzen 3', 'tem_subcat' => false],
            ['cat_id' => '1013', 'super_cat_id' => '1', 'cat_nome' => 'Ryzen 5', 'tem_subcat' => false],
            ['cat_id' => '1014', 'super_cat_id' => '1', 'cat_nome' => 'Ryzen 7', 'tem_subcat' => false],
            ['cat_id' => '1015', 'super_cat_id' => '1', 'cat_nome' => 'Ryzen 9', 'tem_subcat' => false],
            ['cat_id' => '1016', 'super_cat_id' => '1', 'cat_nome' => 'Threadripper', 'tem_subcat' => false],
            ['cat_id' => '1017', 'super_cat_id' => '1', 'cat_nome' => 'Epyc', 'tem_subcat' => false],

            //Subcategoria Placa Mãe
            ['cat_id' => '2001', 'super_cat_id' => '2', 'cat_nome' => 'Mini-ITX', 'tem_subcat' => false],
            ['cat_id' => '2002', 'super_cat_id' => '2', 'cat_nome' => 'Micro-ATX', 'tem_subcat' => false],
            ['cat_id' => '2003', 'super_cat_id' => '2', 'cat_nome' => 'ATX', 'tem_subcat' => false],
            ['cat_id' => '2004', 'super_cat_id' => '2', 'cat_nome' => 'Extended-ATX', 'tem_subcat' => false],

            //Subcategoria Memórias
            ['cat_id' => '3001', 'super_cat_id' => '3', 'cat_nome' => 'DDR', 'tem_subcat' => false],
            ['cat_id' => '3002', 'super_cat_id' => '3', 'cat_nome' => 'DDR2', 'tem_subcat' => false],
            ['cat_id' => '3003', 'super_cat_id' => '3', 'cat_nome' => 'DDR3', 'tem_subcat' => false],
            ['cat_id' => '3004', 'super_cat_id' => '3', 'cat_nome' => 'DDR4', 'tem_subcat' => false],
            ['cat_id' => '3005', 'super_cat_id' => '3', 'cat_nome' => 'DDR5', 'tem_subcat' => false],
            ['cat_id' => '3006', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR', 'tem_subcat' => false],
            ['cat_id' => '3007', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR2', 'tem_subcat' => false],
            ['cat_id' => '3008', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR3', 'tem_subcat' => false],
            ['cat_id' => '3009', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR4', 'tem_subcat' => false],
            ['cat_id' => '3010', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR5', 'tem_subcat' => false],

            //Subcategoria Armazenamento
            ['cat_id' => '4001', 'super_cat_id' => '4', 'cat_nome' => 'HDD', 'tem_subcat' => false],
            ['cat_id' => '4002', 'super_cat_id' => '4', 'cat_nome' => 'SSD', 'tem_subcat' => false],
            ['cat_id' => '4003', 'super_cat_id' => '4', 'cat_nome' => 'M.2 SATA', 'tem_subcat' => false],
            ['cat_id' => '4004', 'super_cat_id' => '4', 'cat_nome' => 'M.2 NVMe', 'tem_subcat' => false],

            //Subcategoria Fontes
            ['cat_id' => '5001', 'super_cat_id' => '5', 'cat_nome' => 'Nominal', 'tem_subcat' => false],
            ['cat_id' => '5002', 'super_cat_id' => '5', 'cat_nome' => 'Real Até 500W', 'tem_subcat' => false],
            ['cat_id' => '5003', 'super_cat_id' => '5', 'cat_nome' => 'Real Até 1000W', 'tem_subcat' => false],
            ['cat_id' => '5004', 'super_cat_id' => '5', 'cat_nome' => 'Real Acima de 1000W', 'tem_subcat' => false],

            //Subcategoria Placas de Expansão
            ['cat_id' => '6001', 'super_cat_id' => '6', 'cat_nome' => 'Placas de Vídeo', 'tem_subcat' => false],
            ['cat_id' => '6002', 'super_cat_id' => '6', 'cat_nome' => 'Placas de Som', 'tem_subcat' => false],
            ['cat_id' => '6003', 'super_cat_id' => '6', 'cat_nome' => 'Controladoras RAID', 'tem_subcat' => false],
            ['cat_id' => '6004', 'super_cat_id' => '6', 'cat_nome' => 'Placas Adaptadoras', 'tem_subcat' => false],

            //Subcategoria Rede e Internet
            ['cat_id' => '7001', 'super_cat_id' => '7', 'cat_nome' => 'Roteadores', 'tem_subcat' => false],
            ['cat_id' => '7002', 'super_cat_id' => '7', 'cat_nome' => 'Repetidores', 'tem_subcat' => false],
            ['cat_id' => '7003', 'super_cat_id' => '7', 'cat_nome' => 'Adaptadores Wi-Fi', 'tem_subcat' => false],
            ['cat_id' => '7004', 'super_cat_id' => '7', 'cat_nome' => 'ONU/ONT', 'tem_subcat' => false],
            ['cat_id' => '7005', 'super_cat_id' => '7', 'cat_nome' => 'Cabos', 'tem_subcat' => false],

            //Subcategoria Gabinetes
            ['cat_id' => '8001', 'super_cat_id' => '8', 'cat_nome' => 'Mini-ITX', 'tem_subcat' => false],
            ['cat_id' => '8002', 'super_cat_id' => '8', 'cat_nome' => 'Tower', 'tem_subcat' => false],
            ['cat_id' => '8003', 'super_cat_id' => '8', 'cat_nome' => 'Mid Tower', 'tem_subcat' => false],
            ['cat_id' => '8004', 'super_cat_id' => '8', 'cat_nome' => 'Full Tower', 'tem_subcat' => false],

            //Subcategoria Periféricos
            ['cat_id' => '9001', 'super_cat_id' => '9', 'cat_nome' => 'Teclados', 'tem_subcat' => false],
            ['cat_id' => '9002', 'super_cat_id' => '9', 'cat_nome' => 'Mouses', 'tem_subcat' => false],
            ['cat_id' => '9003', 'super_cat_id' => '9', 'cat_nome' => 'Mousepads', 'tem_subcat' => false],
            ['cat_id' => '9004', 'super_cat_id' => '9', 'cat_nome' => 'Fones de Ouvido', 'tem_subcat' => false],
            ['cat_id' => '9005', 'super_cat_id' => '9', 'cat_nome' => 'Caixas de Som', 'tem_subcat' => false],
            ['cat_id' => '9006', 'super_cat_id' => '9', 'cat_nome' => 'Webcams', 'tem_subcat' => false],
            ['cat_id' => '9007', 'super_cat_id' => '9', 'cat_nome' => 'Impressoras', 'tem_subcat' => false],
            ['cat_id' => '9008', 'super_cat_id' => '9', 'cat_nome' => 'Pen Drives', 'tem_subcat' => false],
            ['cat_id' => '9009', 'super_cat_id' => '9', 'cat_nome' => 'Controles', 'tem_subcat' => false],
            ['cat_id' => '9010', 'super_cat_id' => '9', 'cat_nome' => 'Mesas Digitalizadoras', 'tem_subcat' => false],

        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};
