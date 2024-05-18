<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('nim')->primary(); // Menggunakan nim sebagai primary key
            $table->string('nama');
            $table->integer('angkatan');
            $table->integer('sks');
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
        Schema::dropIfExists('mahasiswas');
    }
}
