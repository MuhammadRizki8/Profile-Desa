<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananPersuratanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_persuratan', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('layanan'); // Nama layanan (contoh: Surat Biodata Penduduk)
            $table->text('detail')->nullable(); // Detail layanan
            $table->text('persyaratan')->nullable(); // Persyaratan (dapat menyimpan daftar persyaratan dalam format JSON atau teks)
            $table->string('jam_pelayanan')->nullable(); // Jam pelayanan
            $table->string('hari_pelayanan')->nullable(); // Hari pelayanan
            $table->text('tata_cara')->nullable(); // Tata cara pengajuan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan_persuratan');
    }
}
