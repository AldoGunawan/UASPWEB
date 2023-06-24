<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public function render()
    {
        return view('livewire.category', [
            'category' => ModelsCategory::latest()->paginate(3)
        ]);
    }
}
