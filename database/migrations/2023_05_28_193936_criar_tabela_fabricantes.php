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
        Schema::create('fabricantes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome_fabricante');
        });

        DB::table('fabricantes')->insert(array(
            ['nome_fabricante' => 'AMD'],
            ['nome_fabricante' => 'Intel'],
            ['nome_fabricante' => 'NVIDIA'],
            ['nome_fabricante' => 'Gigabyte'],
            ['nome_fabricante' => 'Zotac'],
            ['nome_fabricante' => 'Cooler Master'],
            ['nome_fabricante' => 'Corsair'],
            ['nome_fabricante' => 'Kingston'],
            ['nome_fabricante' => 'Mymax'],
            ['nome_fabricante' => 'Logitech'],
            ['nome_fabricante' => 'Razer'],
            ['nome_fabricante' => 'AOC'],
            ['nome_fabricante' => 'ADATA'],
            ['nome_fabricante' => 'Samsung'],
            ['nome_fabricante' => 'Lian Li'],
            ['nome_fabricante' => 'Thermaltake'],
            ['nome_fabricante' => 'Intelbras'],
            ['nome_fabricante' => 'ZTE'],
            ['nome_fabricante' => 'ASRock'],
            ['nome_fabricante' => 'ASUS'],
            ['nome_fabricante' => 'Seagate'],
            ['nome_fabricante' => 'Western Digital'],
            ['nome_fabricante' => 'Risemode'],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fabricantes');
    }
};
