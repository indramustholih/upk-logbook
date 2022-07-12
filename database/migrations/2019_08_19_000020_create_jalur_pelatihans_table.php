<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJalurPelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jalur_pelatihans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_bentuk')->unsigned()->index();
            $table->string('kode')->unique()->index();
            $table->string('jalur_pelatihan');
            $table->string('keterangan');
            $table->timestamps();

            // foreign key
            $table->foreign('id_bentuk')->references('id')->on('bentuk_pelatihans')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jalur_pelatihans');
    }
}
