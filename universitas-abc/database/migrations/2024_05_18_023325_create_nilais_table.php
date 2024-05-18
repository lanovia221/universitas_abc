<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->unsignedBigInteger('matakuliah_id');
            $table->decimal('AFL1', 5, 2)->nullable();
            $table->decimal('AFL2', 5, 2)->nullable();
            $table->decimal('AFL3', 5, 2)->nullable();
            $table->decimal('ALP', 5, 2)->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('nim')->references('nim')->on('mahasiswas')->onDelete('cascade');
            $table->foreign('matakuliah_id')->references('id')->on('mata_kuliahs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
