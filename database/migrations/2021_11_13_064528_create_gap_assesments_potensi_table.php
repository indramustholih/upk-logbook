<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGapAssesmentsPotensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gap_assesments_potensi', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 255)->nullable();
            $table->string('nama', 255)->nullable();
            $table->string('jabatan', 255)->nullable();
            $table->string('perangkat_daerah', 255)->nullable();
            $table->string('kemampuan_berpikir_kritis', 255)->nullable();
            $table->string('kemampuan_berpikir_konseptual', 255)->nullable();
            $table->string('kemampuan_berpikir_analitis', 255)->nullable();
            $table->string('sistematika', 255)->nullable();
            $table->string('ketelitian', 255)->nullable();
            $table->string('pengambilan_keputusan', 255)->nullable();
            $table->string('motivasi', 255)->nullable();
            $table->string('kepatuhan_aturan', 255)->nullable();
            $table->string('komitmen', 255)->nullable();
            $table->string('daya_tahan_kerja', 255)->nullable();
            $table->string('asertiv', 255)->nullable();
            $table->string('adaptasi', 255)->nullable();
            $table->string('kemampuan_mengarahkan', 255)->nullable();
            $table->string('relasi_sosial', 255)->nullable();
            $table->string('kemampuan_kerjasama', 255)->nullable();
            $table->text('deskripsi_potensi', 255)->nullable();
            $table->date('tanggal_assesment')->nullable();
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
        Schema::dropIfExists('gap_assesments_potensi');
    }
}
