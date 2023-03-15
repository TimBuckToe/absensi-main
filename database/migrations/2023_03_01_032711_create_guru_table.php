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
        Schema::create('guru', function (Blueprint $table) {
            $table->id('id_guru');
            $table->foreignId('id_user');
            $table->string('nama_guru', 200);
            $table->string('email', 50);
            $table->string('jenis_kelamin', 20);
            $table->longText('alamat');
            
            
            // $table->foreign('id_guru')
            //     ->references('id')
            //     ->on('')
            //     ->onUpdate('cascade')
            //     ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
};
