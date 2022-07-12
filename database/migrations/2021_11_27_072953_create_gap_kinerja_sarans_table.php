<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGapKinerjaSaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gap_kinerja_sarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip');
            $table->string('kode_opd');
            $table->string('kode_jabatan');
            $table->string('tahun');
            $table->bigInteger('id_saran');
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
        Schema::dropIfExists('gap_kinerja_sarans');
    }
}
