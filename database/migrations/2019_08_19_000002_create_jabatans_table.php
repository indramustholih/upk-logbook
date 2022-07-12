<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatans', function (Blueprint $table) {
            $table->string("kode_jabatan")->primary();
            $table->string("nama_jabatan");
            $table->timestamps();

            // foreign key
            // $table->foreign('kode_opd')->references('kode_opd')->on('perangkat_daerahs')->onDelete('restrict')->onUpdate('cascade');
        });

        DB::statement('ALTER TABLE jabatans ADD FULLTEXT full(nama_jabatan)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
}
