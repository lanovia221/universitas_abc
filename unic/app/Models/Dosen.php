<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    
    public function up()
{
    Schema::create('dosens', function (Blueprint $table) {
        $table->string('nidn')->primary();
        $table->string('nama');
        $table->timestamps();
    });
}

}
