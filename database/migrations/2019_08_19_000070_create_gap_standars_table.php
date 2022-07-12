<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGapStandarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gap_standars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_opd');
            $table->string('kode_jabatan');
            $table->string('nip')->index();
            $table->string('nama');
            $table->bigInteger('id_standar')->unsigned()->index();
            $table->bigInteger('id_riwayat_diklat')->nullable()->unsigned();
            $table->string('nama_riwayat_diklat');
            $table->string('pelatihan');
            $table->string('status');
            $table->timestamps();

            // foreign key
            $table->foreign('id_standar')->references('id')->on('standar_pelatihans')->onDelete('restrict')->onUpdate('cascade');
            // $table->foreign('nip')->references('nip')->on('pegawais')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gap_standars');
    }
}
