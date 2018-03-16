<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nipg')->unique();
            $table->string('foto');
            $table->string('nama_guru');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->text('kelas');
            // $table->integer('kelas_id')->unsigned();
            // $table->foreign('kelas_id')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('id_mapel')->unsigned();
            $table->foreign('id_mapel')->references('id')->on('mapels')->onUpdate('cascade')->onDelete('cascade'); 
            $table->text('alamat');
            $table->string('no_telepon')->unique();
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('gurus');
    }
}
