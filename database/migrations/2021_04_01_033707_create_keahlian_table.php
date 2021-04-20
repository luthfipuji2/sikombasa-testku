<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeahlianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keahlian', function (Blueprint $table) {
            $table->bigIncrements('id_keahlian');
            $table->unsignedBigInteger('id_master_keahlian');
            $table->foreign('id_master_keahlian')->references('id_master_keahlian')->on('master_keahlian')->onDelete('cascade');
            $table->string('nama_sertifikat');
            $table->string('no_sertifikat');
            $table->string('bukti_dokumen');
            $table->string('diterbitkan_oleh');
            $table->date('masa_berlaku');
            $table->string('status_verifikasi');
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
        Schema::dropIfExists('keahlian');
    }
}
