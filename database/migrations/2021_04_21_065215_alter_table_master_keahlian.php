<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableMasterKeahlian extends Migration
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
            $table->unsignedBigInteger('id_keahlian');
            $table->foreign('id_keahlian')->references('id_keahlian')->on('keahlian')->onDelete('cascade');
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
        //
    }
}
