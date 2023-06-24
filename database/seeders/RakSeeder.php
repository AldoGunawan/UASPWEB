<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 5; $i++) {
        Rak::create([
            'rak' => 1,
            'baris' => $i,
            'category_id' => 1,
            'slug' => 1 . '-' . $i
        ]);
    }
    }
}
