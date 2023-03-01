<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->id('id_absen');
            $table->integer('id_guru')->index();
            $table->integer('id_kelas')->index();
            $table->string('hari_kerja');
            $table->time('jam_masuk');
            $table->time('jam_keluar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen');
    }
};

/*

!id_absen Primary 	int(11)
	2 	id_guru Index 	int(11) 	
	3 	id_kelas Index 	int(11) 	
	4 	hari_kerja 	varchar(20) 	
	5 	jam_masuk 	time
	6 	jam_keluar  time


*/