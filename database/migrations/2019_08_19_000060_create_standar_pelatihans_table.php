<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandarPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standar_pelatihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_opd')->index();
            $table->string('kode_jabatan')->index();
            $table->bigInteger('id_nama')->unsigned()->index();
            $table->string('tingkat_kebutuhan');
            $table->string('keterangan');
            $table->timestamps();

            // foreign key
            $table->foreign('id_nama')->references('id')->on('nama_pelatihans')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kode_jabatan')->references('kode_jabatan')->on('jabatans')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kode_opd')->references('kode_opd')->on('perangkat_daerahs')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standar_pelatihans');
    }
}
