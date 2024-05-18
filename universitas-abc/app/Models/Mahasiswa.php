<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public function up()
{
    Schema::create('mahasiswas', function (Blueprint $table) {
        $table->string('nim')->primary();
        $table->string('nama');
        $table->integer('angkatan');
        $table->integer('jumlah_sks');
        $table->timestamps();
    });
}

}
