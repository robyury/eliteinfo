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
            $table->string('cat_nome');
        });

        DB::table('categorias')->insert(array(

            //Categorias Principais (Suporta até 999 categorias)

            ['cat_id' => '1', 'cat_nome' => 'Processador'],
            ['cat_id' => '2', 'cat_nome' => 'Placa Mãe'],
            ['cat_id' => '3','cat_nome' => 'Memória RAM'],
            ['cat_id' => '4','cat_nome' => 'Armazenamento'],
            ['cat_id' => '5', 'cat_nome' => 'Fonte'],
            ['cat_id' => '6','cat_nome' => 'Placa de Expansão'],
            ['cat_id' => '7','cat_nome' => 'Rede e Internet'],
            ['cat_id' => '8','cat_nome' => 'Gabinetes'],
            ['cat_id' => '9','cat_nome' => 'Periféricos'],
            ['cat_id' => '10','cat_nome' => 'Outros'],

            //Subcategorias (Começam pelo ID e cada categoria, suportam 999 subcategorias.
            //Exemplo: 1001 = 1 (Processador) 001 -> (Primeira subcategoria)

            //Subcategoria Processadores
            ['cat_id' => '1001', 'cat_nome' => 'P/Intel - LGA1155'],
            ['cat_id' => '1002', 'cat_nome' => 'P/Intel - LGA1150'],
            ['cat_id' => '1003', 'cat_nome' => 'P/Intel - LGA1151'],
            ['cat_id' => '1004', 'cat_nome' => 'P/Intel - LGA2011'],
            ['cat_id' => '1005', 'cat_nome' => 'P/Intel - LGA2066'],
            ['cat_id' => '1006', 'cat_nome' => 'P/Intel - LGA4189'],
            ['cat_id' => '1007', 'cat_nome' => 'P/Intel - LGA1200'],
            ['cat_id' => '1008', 'cat_nome' => 'P/Intel - LGA1700'],
            ['cat_id' => '1009', 'cat_nome' => 'P/Intel - LGA4677'],
            ['cat_id' => '1010', 'cat_nome' => 'P/AMD - FM1'],
            ['cat_id' => '1011', 'cat_nome' => 'P/AMD - FM2'],
            ['cat_id' => '1012', 'cat_nome' => 'P/AMD - FM2+'],
            ['cat_id' => '1013', 'cat_nome' => 'P/AMD - AM1'],
            ['cat_id' => '1014', 'cat_nome' => 'P/AMD - AM2'],
            ['cat_id' => '1015', 'cat_nome' => 'P/AMD - AM3'],
            ['cat_id' => '1016', 'cat_nome' => 'P/AMD - AM3+'],
            ['cat_id' => '1017', 'cat_nome' => 'P/AMD - AM4'],
            ['cat_id' => '1018', 'cat_nome' => 'P/AMD - AM5'],

            //Subcategoria Placa Mãe
            ['cat_id' => '2001', 'cat_nome' => 'Mini-ITX'],
            ['cat_id' => '2002', 'cat_nome' => 'Micro-ATX'],
            ['cat_id' => '2003', 'cat_nome' => 'ATX'],
            ['cat_id' => '2004', 'cat_nome' => 'Extended-ATX'],

            //Subcategoria Memórias
            ['cat_id' => '3001', 'cat_nome' => 'DDR', ],
            ['cat_id' => '3002', 'cat_nome' => 'DDR2'],
            ['cat_id' => '3003', 'cat_nome' => 'DDR3'],
            ['cat_id' => '3004', 'cat_nome' => 'DDR4'],
            ['cat_id' => '3005', 'cat_nome' => 'DDR5'],
            ['cat_id' => '3006', 'cat_nome' => 'SODIMM DDR'],
            ['cat_id' => '3007', 'cat_nome' => 'SODIMM DDR2'],
            ['cat_id' => '3008', 'cat_nome' => 'SODIMM DDR3'],
            ['cat_id' => '3009', 'cat_nome' => 'SODIMM DDR4'],
            ['cat_id' => '3010', 'cat_nome' => 'SODIMM DDR5'],

            //Subcategoria Armazenamento
            ['cat_id' => '4001', 'cat_nome' => 'HDD'],
            ['cat_id' => '4002', 'cat_nome' => 'SSD'],
            ['cat_id' => '4003', 'cat_nome' => 'M.2 SATA'],
            ['cat_id' => '4004', 'cat_nome' => 'M.2 NVMe'],

            //Subcategoria Fontes
            ['cat_id' => '5001', 'cat_nome' => 'Nominal'],
            ['cat_id' => '5002', 'cat_nome' => 'Real Até 500W'],
            ['cat_id' => '5003', 'cat_nome' => 'Real Até 1000W'],
            ['cat_id' => '5004', 'cat_nome' => 'Real Acima de 1000W'],

            //Subcategoria Placas de Expansão
            ['cat_id' => '6001', 'cat_nome' => 'Placas de Vídeo'],
            ['cat_id' => '6002', 'cat_nome' => 'Placas de Som'],
            ['cat_id' => '6003', 'cat_nome' => 'Controladoras RAID'],
            ['cat_id' => '6004', 'cat_nome' => 'Placas Adaptadoras'],

            //Subcategoria Rede e Internet
            ['cat_id' => '7001', 'cat_nome' => 'Roteadores'],
            ['cat_id' => '7002', 'cat_nome' => 'Repetidores'],
            ['cat_id' => '7003', 'cat_nome' => 'Adaptadores Wi-Fi'],
            ['cat_id' => '7004', 'cat_nome' => 'ONU/ONT'],
            ['cat_id' => '7005', 'cat_nome' => 'Cabos'],

            //Subcategoria Gabinetes
            ['cat_id' => '8001', 'cat_nome' => 'Mini-ITX'],
            ['cat_id' => '8002', 'cat_nome' => 'Tower'],
            ['cat_id' => '8003', 'cat_nome' => 'Mid Tower'],
            ['cat_id' => '8004', 'cat_nome' => 'Full Tower'],

            //Subcategoria Periféricos
            ['cat_id' => '9001', 'cat_nome' => 'Teclados'],
            ['cat_id' => '9002', 'cat_nome' => 'Mouses'],
            ['cat_id' => '9003', 'cat_nome' => 'Mousepads'],
            ['cat_id' => '9004', 'cat_nome' => 'Fones de Ouvido'],
            ['cat_id' => '9005', 'cat_nome' => 'Caixas de Som'],
            ['cat_id' => '9006', 'cat_nome' => 'Webcams'],
            ['cat_id' => '9007', 'cat_nome' => 'Impressoras'],
            ['cat_id' => '9008', 'cat_nome' => 'Pen Drives'],
            ['cat_id' => '9009', 'cat_nome' => 'Controles'],
            ['cat_id' => '9010', 'cat_nome' => 'Mesas Digitalizadoras'],


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
