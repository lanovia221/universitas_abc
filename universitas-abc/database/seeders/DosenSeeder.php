<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run()
    {
        Dosen::create([
            'nidn' => '12345678',
            'nama' => 'John Doe'
        ]);

        Dosen::create([
            'nidn' => '87654321',
            'nama' => 'Jane Doe'
        ]);
    }
}

