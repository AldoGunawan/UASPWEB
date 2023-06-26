<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;
    protected $table = 'rak';
    protected $fillable = ['rak', 'baris', 'category_id', 'slug'];
    public function category(){
        return $this->belongsTo(Category::class);
        
    }
}
