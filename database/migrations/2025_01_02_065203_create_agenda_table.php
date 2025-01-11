<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->text('description');
            $table->date('agenda_date'); // Tambahkan kolom tanggal agenda
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
