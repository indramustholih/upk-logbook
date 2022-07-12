<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGapAssesmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gap_assesments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip', 255)->nullable();
            $table->string('nama', 255)->nullable();
            $table->string('jabatan', 255)->nullable();
            $table->string('perangkat_daerah', 255)->nullable();
            $table->float('integritas', 8, 2)->nullable();
            $table->float('kerjasama', 8, 2)->nullable();
            $table->float('komunikasi', 8, 2)->nullable();
            $table->float('orientasi', 8, 2)->nullable();
            $table->float('pelayanan_publik', 8, 2)->nullable();
            $table->float('pengembangan_diri', 8, 2)->nullable();
            $table->float('mengelola_perubahan', 8, 2)->nullable();
            $table->float('pengambilan_keputusan', 8, 2)->nullable();
            $table->float('perekat_bangsa', 8, 2)->nullable();
            $table->float('total', 8, 2)->nullable();
            $table->string('kategori', 255)->nullable();
            $table->float('jpm', 8, 2)->nullable();
            $table->float('jpm_proyeksi', 8, 2)->nullable();
            $table->text('saran_pengembangan1')->nullable();
            $table->text('saran_pengembangan2')->nullable();
            $table->text('saran_pengembangan3')->nullable();
            $table->text('saran_pengembangan4')->nullable();
            $table->text('saran_pengembangan5')->nullable();
            $table->text('saran_pengembangan6')->nullable();
            $table->text('saran_pengembangan7')->nullable();
            $table->text('saran_pengembangan8')->nullable();
            $table->text('saran_pengembangan9')->nullable();
            $table->text('saran_pengembangan10')->nullable();
            $table->text('kekuatan_1')->nullable();
            $table->text('kekuatan_2')->nullable();
            $table->text('kekuatan_3')->nullable();
            $table->text('kekuatan_4')->nullable();
            $table->text('kekuatan_5')->nullable();
            $table->text('kekuatan_6')->nullable();
            $table->text('kekuatan_7')->nullable();
            $table->text('kekuatan_8')->nullable();
            $table->text('kekuatan_9')->nullable();
            $table->text('kekuatan_10')->nullable();
            $table->string('saran_penempatan_1', 255)->nullable();
            $table->string('saran_penempatan_2', 255)->nullable();
            $table->string('saran_penempatan_3', 255)->nullable();
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
        Schema::dropIfExists('gap_assesments');
    }
}
