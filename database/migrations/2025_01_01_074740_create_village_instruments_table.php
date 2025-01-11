<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageInstrumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village_instruments', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('category');
            $table->string('position');
            $table->string('name');
            $table->text('description');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('village_instruments');
    }
}
