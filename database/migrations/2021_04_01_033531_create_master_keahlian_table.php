<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterKeahlianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_keahlian', function (Blueprint $table) {
            $table->bigIncrements('id_master_keahlian');
            $table->unsignedBigInteger('id_translator');
            $table->foreign('id_translator')->references('id_translator')->on('translator')->onDelete('cascade');
            $table->string('nama_master_keahlian');
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
        Schema::dropIfExists('master_keahlian');
    }
}
