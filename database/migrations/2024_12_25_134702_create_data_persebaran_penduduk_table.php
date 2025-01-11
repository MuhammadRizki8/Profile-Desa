<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPersebaranPendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_persebaran_penduduk', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('group'); // Nama kelompok
            $table->integer('male'); // Jumlah pria
            $table->integer('female'); // Jumlah wanita
            $table->integer('total'); // Total jumlah
            $table->timestamps(); // create_at & update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_persebaran_penduduk');
    }
}
