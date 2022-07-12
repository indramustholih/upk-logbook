<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatDiklatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_diklats', function (Blueprint $table) {
            $table->bigIncrements('id'); // id_diklat
            $table->string("kode_opd");
            $table->string("kode_jabatan");
            $table->string("nip");
            $table->string("nama");
            $table->string("nama_diklat")->nullable();
            $table->string("mulai")->nullable();
            $table->string("selesai")->nullable();
            $table->string("penyelenggara")->nullable();
            $table->string("tempat")->nullable();
            $table->string("jumlah_jam")->nullable();
            $table->string("sttp_no")->nullable();
            $table->string("sttp_tgl")->nullable();
            $table->string("sttp_pej")->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE riwayat_diklats ADD FULLTEXT full(nama_diklat, nip, nama, kode_opd, kode_jabatan)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_diklats');
    }
}
