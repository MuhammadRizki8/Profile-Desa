<?php
// database/migrations/xxxx_create_penduduk_tables.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTables extends Migration
{
    public function up()
    {
        Schema::create('penduduk_rw', function (Blueprint $table) {
            $table->id();
            $table->string('rw');
            $table->integer('laki');
            $table->integer('perempuan');
            $table->integer('total');
            $table->timestamps();
        });

        Schema::create('penduduk_gender', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->integer('jumlah');
            $table->timestamps();
        });

        Schema::create('penduduk_agama', function (Blueprint $table) {
            $table->id();
            $table->string('agama');
            $table->integer('laki');
            $table->integer('perempuan');
            $table->integer('total');
            $table->timestamps();
        });

        Schema::create('penduduk_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('pendidikan');
            $table->integer('laki');
            $table->integer('perempuan');
            $table->integer('total');
            $table->timestamps();
        });

        Schema::create('penduduk_umur', function (Blueprint $table) {
            $table->id();
            $table->string('umur');
            $table->integer('laki');
            $table->integer('perempuan');
            $table->integer('total');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penduduk_rw');
        Schema::dropIfExists('penduduk_gender');
        Schema::dropIfExists('penduduk_agama');
        Schema::dropIfExists('penduduk_pendidikan');
        Schema::dropIfExists('penduduk_umur');
    }
}
