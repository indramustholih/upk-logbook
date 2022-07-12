<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiIntegrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_integrasis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('parameter')->nullable();
            $table->string('access_key')->nullable();
            $table->string('user_agent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_integrasis');
    }
}
