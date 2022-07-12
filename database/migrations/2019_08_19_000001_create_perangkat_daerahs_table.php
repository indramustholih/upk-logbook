<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerangkatDaerahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkat_daerahs', function (Blueprint $table) {
            $table->string("kode_opd")->primary();
            $table->string("nama_opd");
        });

        DB::statement('ALTER TABLE perangkat_daerahs ADD FULLTEXT full(nama_opd)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perangkat_daerahs');
    }
}
