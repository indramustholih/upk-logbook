<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNamaPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nama_pelatihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_jenis')->unsigned()->index();
            $table->bigInteger('id_jalur')->unsigned()->index();
            $table->string('kode')->unique()->index();
            $table->string('nama_pelatihan');
            $table->string('keterangan');
            $table->timestamps();

            // foreign key
            $table->foreign('id_jenis')->references('id')->on('jenis_pelatihans')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('id_jalur')->references('id')->on('jalur_pelatihans')->onDelete('restrict')->onUpdate('cascade');
        });

        DB::statement('ALTER TABLE nama_pelatihans ADD FULLTEXT full(nama_pelatihan)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nama_pelatihans');
    }
}
