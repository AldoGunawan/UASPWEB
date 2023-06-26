<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Rak as ModelsRak;
use Livewire\Component;
use Livewire\WithPagination;

class Rak extends Component
{
    public $create, $edit;
    public $category, $rak, $rak_id, $baris, $category_id ;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function create()
    {
        
        $this->create = true;
        $this->category = Category::all();
    }
    public function render()
    {
        return view('livewire.rak', [
            'raks' => ModelsRak::latest()->paginate(3)
        ]);
    }

    public function edit(ModelsRak $rak) {

        $this->format();

        $this->rak = $rak->rak;
        $this->rak_id = $rak->rak_id;
        $this->baris = $rak->baris;
        $this->category = $rak->category;
        $this->edit = true;
        $this->category = Category::all();
    }

    public function update(ModelsRak $rak) {
        // dd($rak);
        $rak_pilihan = ModelsRak::select('baris')->where('rak', $this->rak)->get()->implode('baris', ',');
       
        $this->validate([
            'rak' => 'required|numeric|min:1',
            'baris' => 'required|numeric|min:1|not_in:' . $rak_pilihan,
            'category_id' => 'required|numeric|min:1',
        ]);
        session()->flash('sukses', 'Data berhasil diubah.');

        $this->format();
    }

    public function format()
    {
        unset($this->create);
        unset($this->edit);
        unset($this->delete);
        unset($this->rak_id);
        unset($this->rak);
        unset($this->baris);
        unset($this->category_id);
        unset($this->category);
    }
}
