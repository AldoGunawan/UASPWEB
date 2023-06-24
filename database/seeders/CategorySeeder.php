<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = ['novel ', 'sejarah', 'religi', 'biografi', 'komik'];
        
        foreach ($category as $value) {
            
            Category::create   ([
                'nama' => $value,
                'slug' => Str::slug($value),
            ]);
        }
        
    }
}
