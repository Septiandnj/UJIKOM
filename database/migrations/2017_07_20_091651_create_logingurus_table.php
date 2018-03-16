<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogingurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logingurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_siswa');
            $table->string('jenis_kelamin');
            $table->integer('kkm');
            $table->integer('uh');
            $table->integer('uhh');
            $table->integer('uhhh');
            $table->integer('uts');
            $table->integer('uas');
            $table->integer('rataa');
            $table->integer('raport');
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
        Schema::dropIfExists('logingurus');
    }
}
