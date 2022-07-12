<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyelengaraPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyelenggara_pelatihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode')->unique()->index();
            $table->string('penyelenggara_pelatihan');
            $table->string('keterangan');
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
        Schema::dropIfExists('penyelengara_pelatihans');
    }
}
