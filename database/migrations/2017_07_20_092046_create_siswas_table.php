<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nis')->unique();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('foto');
            $table->string('nama_siswa');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');
            $table->integer('id_kelas')->unsigned();
            $table->foreign('id_kelas')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('jurusan_id')->unsigned();
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('siswas');
    }
}
