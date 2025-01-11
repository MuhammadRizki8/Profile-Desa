<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePopulationDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('population_data', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kelompok'); // Kolom untuk jenis kelompok
            $table->integer('jumlah'); // Kolom untuk jumlah
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
        Schema::dropIfExists('population_data');
    }
}

