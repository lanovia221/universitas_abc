<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    public function up()
{
    Schema::create('nilais', function (Blueprint $table) {
        $table->id();
        $table->float('afl1');
        $table->float('afl2');
        $table->float('afl3');
        $table->float('alp');
        $table->string('nim');
        $table->foreign('nim')->references('nim')->on('mahasiswas')->onDelete('cascade');
        $table->unsignedBigInteger('mata_kuliah_id');
        $table->foreign('mata_kuliah_id')->references('id')->on('mata_kuliahs')->onDelete('cascade');
        $table->timestamps();
    });
}

}
