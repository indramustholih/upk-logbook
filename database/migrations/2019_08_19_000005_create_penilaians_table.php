<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->string('id');
            $table->string("kode_opd");
            $table->string("kode_jabatan");
            $table->string("jabatan");
            $table->string("nip");
            $table->string("nama");
            $table->string("tahun");
            $table->string("periode");
            $table->string("eselon")->nullable();
            $table->string("eselon_kd")->nullable();
            $table->string("jenis_jabatan");
            $table->integer("nilai_jabatan");
            $table->string("kelas_jabatan")->nullable();
            $table->decimal("nilai_skp",  8, 3);
            $table->decimal("nilai_perilaku",  8, 3);
            $table->decimal("nilai_total",  8, 3);
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
        Schema::dropIfExists('penilaians');
    }
}
