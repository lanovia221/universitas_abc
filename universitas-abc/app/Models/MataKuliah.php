<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MataKuliah;


class MataKuliah extends Model
{
    use HasFactory;

    public function up()
{
    Schema::create('mata_kuliahs', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('hari');
        $table->time('mulaikelas');
        $table->time('berakhirkelas');
        $table->integer('sks');
        $table->string('ruangankelas');
        $table->string('nidn');
        $table->foreign('nidn')->references('nidn')->on('dosens')->onDelete('cascade');
        $table->timestamps();
    });
}

}
