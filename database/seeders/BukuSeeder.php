<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create ([
            'judul' => 'bintang',
            'slug' => Str::slug('bintang'),
            'sampul' => 'Sampul_novel_Bintang.jpeg',
            'penulis' => 'tere liye',
            'penerbit_id' => 1,
            'category_id' => 1,
            'rak_id' => 1,
            'stok' => 10
        ]);
        
        Buku::create ([
            'judul' => 'Matahari',
            'slug' => Str::slug('Matahari'),
            'sampul' => 'Sampul_novel_Matahari.jpeg',
            'penulis' => 'tere liye',
            'penerbit_id' => 1,
            'category_id' => 1,
            'rak_id' => 1,
            'stok' => 10
        ]);
    }
}
