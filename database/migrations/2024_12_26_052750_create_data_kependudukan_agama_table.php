<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKependudukanAgamaTable extends Migration
{
    public function up()
    {
        Schema::create('data_kependudukan_agama', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kelompok'); // Contoh: Islam, Kristen, dll.
            $table->integer('laki_laki')->default(0);
            $table->integer('perempuan')->default(0);
            $table->integer('jumlah')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_kependudukan_agama');
    }
}
