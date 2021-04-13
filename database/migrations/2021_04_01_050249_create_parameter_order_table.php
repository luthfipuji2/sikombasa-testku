<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParameterOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameter_order', function (Blueprint $table) {
            $table->bigIncrements('id_parameter_order');
            $table->string('durasi_video')->nullable();
            $table->integer('jumlah_dubber')->nullable();
            $table->string('durasi_pertemuan')->nullable();
            $table->string('jumlah_karakter')->nullable();
            $table->string('jumlah_halaman')->nullable();
            $table->string('jenis_layanan')->nullable();
            $table->integer('harga');
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
        Schema::dropIfExists('parameter_order');
    }
}
