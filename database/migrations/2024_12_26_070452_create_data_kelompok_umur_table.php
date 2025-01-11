<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data_kelompok_umur', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kelompok');
            $table->integer('laki_laki');
            $table->integer('perempuan');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kelompok_umur');
    }
};
