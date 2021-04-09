<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id_order');
            $table->unsignedBigInteger('id_klien');
            $table->foreign('id_klien')->references('id_klien')->on('klien')->onDelete('cascade');
            $table->unsignedBigInteger('id_translator');
            $table->foreign('id_translator')->references('id_translator')->on('translator')->onDelete('cascade');
            $table->unsignedBigInteger('id_parameter_order');
            $table->foreign('id_parameter_order')->references('id_parameter_order')->on('parameter_order')->onDelete('cascade');
            $table->string('jenis_layanan');
            $table->string('jumlah_halaman');
            $table->string('text');
            $table->string('nama_file');
            $table->string('nama_upload');
            $table->string('path_file');
            $table->string('size');
            $table->string('ekstensi');
            $table->integer('jumlah_karakter');
            $table->string('durasi_video');
            $table->integer('jumlah_dubber');
            $table->string('durasi_pertemuan');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('lokasi');
            $table->date('tgl_order');
            $table->string('durasi_pengerjaan');
            $table->string('is_status');
            $table->string('status_at');
            $table->string('status_by');

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
        Schema::dropIfExists('order');
    }
}
