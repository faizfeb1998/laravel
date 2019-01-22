<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerangkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkats', function (Blueprint $table) {
            $table->increments('Id_Perangkat');
            $table->string('Serial_Number');
            $table->string('Nomor_Inventaris');
            $table->string('Merek');
            $table->string('Kondisi');
            $table->string('Nomor_Kontrak');
            $table->date('Tahun_Perolehan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perangkats');
    }
}
