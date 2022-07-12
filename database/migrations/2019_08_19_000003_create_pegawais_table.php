<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nip");
            $table->string("nama");
            $table->string("kode_jabatan")->index();
            $table->string("kode_opd")->index();
            $table->string("status");
            $table->timestamps();

            // foreign key
            $table->foreign('kode_opd')->references('kode_opd')->on('perangkat_daerahs')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('kode_jabatan')->references('kode_jabatan')->on('jabatans')->onDelete('restrict')->onUpdate('cascade');
        });

        DB::statement('ALTER TABLE pegawais ADD FULLTEXT full(nama, kode_jabatan)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawais');
    }
}
