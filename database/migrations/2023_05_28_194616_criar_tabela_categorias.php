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
        });

        DB::table('categorias')->insert(array(

            //Categorias Principais (Suporta até 999 categorias)

            ['cat_id' => '1', 'super_cat_id' => NULL, 'cat_nome' => 'Processador'],
            ['cat_id' => '2', 'super_cat_id' => NULL, 'cat_nome' => 'Placa Mãe'],
            ['cat_id' => '3', 'super_cat_id' => NULL, 'cat_nome' => 'Memória RAM'],
            ['cat_id' => '4', 'super_cat_id' => NULL, 'cat_nome' => 'Armazenamento'],
            ['cat_id' => '5', 'super_cat_id' => NULL, 'cat_nome' => 'Fonte'],
            ['cat_id' => '6', 'super_cat_id' => NULL, 'cat_nome' => 'Placa de Expansão'],
            ['cat_id' => '7', 'super_cat_id' => NULL, 'cat_nome' => 'Rede e Internet'],
            ['cat_id' => '8', 'super_cat_id' => NULL, 'cat_nome' => 'Gabinetes'],
            ['cat_id' => '9', 'super_cat_id' => NULL, 'cat_nome' => 'Periféricos'],
            ['cat_id' => '10','super_cat_id' => NULL, 'cat_nome' => 'Outros'],

            //Subcategorias (Começam pelo ID e cada categoria, suportam 999 subcategorias.
            //Exemplo: 1001 = 1 (Processador) 001 -> (Primeira subcategoria)

            //Subcategoria Processadores
            ['cat_id' => '1001', 'super_cat_id' => '1', 'cat_nome' => 'Pentium'],
            ['cat_id' => '1002', 'super_cat_id' => '1', 'cat_nome' => 'Celeron'],
            ['cat_id' => '1003', 'super_cat_id' => '1', 'cat_nome' => 'Xeon'],
            ['cat_id' => '1004', 'super_cat_id' => '1', 'cat_nome' => 'i3'],
            ['cat_id' => '1005', 'super_cat_id' => '1', 'cat_nome' => 'i5'],
            ['cat_id' => '1006', 'super_cat_id' => '1', 'cat_nome' => 'i7'],
            ['cat_id' => '1007', 'super_cat_id' => '1', 'cat_nome' => 'i9'],
            ['cat_id' => '1008', 'super_cat_id' => '1', 'cat_nome' => 'Athlon'],
            ['cat_id' => '1009', 'super_cat_id' => '1', 'cat_nome' => 'Sempron'],
            ['cat_id' => '1010', 'super_cat_id' => '1', 'cat_nome' => 'Phenom'],
            ['cat_id' => '1011', 'super_cat_id' => '1', 'cat_nome' => 'FX'],
            ['cat_id' => '1012', 'super_cat_id' => '1', 'cat_nome' => 'Ryzen 3'],
            ['cat_id' => '1013', 'super_cat_id' => '1', 'cat_nome' => 'Ryzen 5'],
            ['cat_id' => '1014', 'super_cat_id' => '1', 'cat_nome' => 'Ryzen 7'],
            ['cat_id' => '1015', 'super_cat_id' => '1', 'cat_nome' => 'Ryzen 9'],
            ['cat_id' => '1016', 'super_cat_id' => '1', 'cat_nome' => 'Threadripper'],
            ['cat_id' => '1017', 'super_cat_id' => '1', 'cat_nome' => 'Epyc'],

            //Subcategoria Placa Mãe
            ['cat_id' => '2001', 'super_cat_id' => '2', 'cat_nome' => 'Mini-ITX'],
            ['cat_id' => '2002', 'super_cat_id' => '2', 'cat_nome' => 'Micro-ATX'],
            ['cat_id' => '2003', 'super_cat_id' => '2', 'cat_nome' => 'ATX'],
            ['cat_id' => '2004', 'super_cat_id' => '2', 'cat_nome' => 'Extended-ATX'],

            //Subcategoria Memórias
            ['cat_id' => '3001', 'super_cat_id' => '3', 'cat_nome' => 'DDR', ],
            ['cat_id' => '3002', 'super_cat_id' => '3', 'cat_nome' => 'DDR2'],
            ['cat_id' => '3003', 'super_cat_id' => '3', 'cat_nome' => 'DDR3'],
            ['cat_id' => '3004', 'super_cat_id' => '3', 'cat_nome' => 'DDR4'],
            ['cat_id' => '3005', 'super_cat_id' => '3', 'cat_nome' => 'DDR5'],
            ['cat_id' => '3006', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR'],
            ['cat_id' => '3007', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR2'],
            ['cat_id' => '3008', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR3'],
            ['cat_id' => '3009', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR4'],
            ['cat_id' => '3010', 'super_cat_id' => '3', 'cat_nome' => 'SODIMM DDR5'],

            //Subcategoria Armazenamento
            ['cat_id' => '4001', 'super_cat_id' => '4', 'cat_nome' => 'HDD'],
            ['cat_id' => '4002', 'super_cat_id' => '4', 'cat_nome' => 'SSD'],
            ['cat_id' => '4003', 'super_cat_id' => '4', 'cat_nome' => 'M.2 SATA'],
            ['cat_id' => '4004', 'super_cat_id' => '4', 'cat_nome' => 'M.2 NVMe'],

            //Subcategoria Fontes
            ['cat_id' => '5001', 'super_cat_id' => '5', 'cat_nome' => 'Nominal'],
            ['cat_id' => '5002', 'super_cat_id' => '5', 'cat_nome' => 'Real Até 500W'],
            ['cat_id' => '5003', 'super_cat_id' => '5', 'cat_nome' => 'Real Até 1000W'],
            ['cat_id' => '5004', 'super_cat_id' => '5', 'cat_nome' => 'Real Acima de 1000W'],

            //Subcategoria Placas de Expansão
            ['cat_id' => '6001', 'super_cat_id' => '6', 'cat_nome' => 'Placas de Vídeo'],
            ['cat_id' => '6002', 'super_cat_id' => '6', 'cat_nome' => 'Placas de Som'],
            ['cat_id' => '6003', 'super_cat_id' => '6', 'cat_nome' => 'Controladoras RAID'],
            ['cat_id' => '6004', 'super_cat_id' => '6', 'cat_nome' => 'Placas Adaptadoras'],

            //Subcategoria Rede e Internet
            ['cat_id' => '7001', 'super_cat_id' => '7', 'cat_nome' => 'Roteadores'],
            ['cat_id' => '7002', 'super_cat_id' => '7', 'cat_nome' => 'Repetidores'],
            ['cat_id' => '7003', 'super_cat_id' => '7', 'cat_nome' => 'Adaptadores Wi-Fi'],
            ['cat_id' => '7004', 'super_cat_id' => '7', 'cat_nome' => 'ONU/ONT'],
            ['cat_id' => '7005', 'super_cat_id' => '7', 'cat_nome' => 'Cabos'],

            //Subcategoria Gabinetes
            ['cat_id' => '8001', 'super_cat_id' => '8', 'cat_nome' => 'Mini-ITX'],
            ['cat_id' => '8002', 'super_cat_id' => '8', 'cat_nome' => 'Tower'],
            ['cat_id' => '8003', 'super_cat_id' => '8', 'cat_nome' => 'Mid Tower'],
            ['cat_id' => '8004', 'super_cat_id' => '8', 'cat_nome' => 'Full Tower'],

            //Subcategoria Periféricos
            ['cat_id' => '9001', 'super_cat_id' => '9', 'cat_nome' => 'Teclados'],
            ['cat_id' => '9002', 'super_cat_id' => '9', 'cat_nome' => 'Mouses'],
            ['cat_id' => '9003', 'super_cat_id' => '9', 'cat_nome' => 'Mousepads'],
            ['cat_id' => '9004', 'super_cat_id' => '9', 'cat_nome' => 'Fones de Ouvido'],
            ['cat_id' => '9005', 'super_cat_id' => '9', 'cat_nome' => 'Caixas de Som'],
            ['cat_id' => '9006', 'super_cat_id' => '9', 'cat_nome' => 'Webcams'],
            ['cat_id' => '9007', 'super_cat_id' => '9', 'cat_nome' => 'Impressoras'],
            ['cat_id' => '9008', 'super_cat_id' => '9', 'cat_nome' => 'Pen Drives'],
            ['cat_id' => '9009', 'super_cat_id' => '9', 'cat_nome' => 'Controles'],
            ['cat_id' => '9010', 'super_cat_id' => '9', 'cat_nome' => 'Mesas Digitalizadoras'],


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
