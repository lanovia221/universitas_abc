<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->string('matakuliah_id')->primary(); // Auto increment ID
            $table->string('nidn'); // Foreign key
            $table->string('nama');
            $table->string('hari');
            $table->string('mulaikelas');
            $table->string('berakhirkelas');
            $table->unsignedTinyInteger('sks');
            $table->string('ruangkelas');
            $table->timestamps();

            // Add foreign key constraint for nidn
            $table->foreign('nidn')->references('nidn')->on('dosens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_kuliahs');
    }
}
