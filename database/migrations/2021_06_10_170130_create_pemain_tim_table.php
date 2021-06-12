<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemainTimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemain_tim', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemain');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('posisi_pemain');
            $table->integer('nomor_punggung');
            $table->integer('tim');
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
        Schema::dropIfExists('pemain_tim');
    }
}
