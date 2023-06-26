<?php

namespace App\Http\Livewire;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
 
    public $create, $edit ,$nama, $delete, $category_id ;

    protected $rules = [
        'nama' => 'required|min:6',
    ];


    public function generatePDF()
{
    $data = [
        'category' => $this->category // Assuming $category is the collection of categories
    ];

    $pdf = PDF::loadView('pdf.category', $data); // Assuming you have a PDF template called 'category'

    return $pdf->download('category.pdf');
}



    public function create(){
        $this->format();
        $this->create = true;
    }

    public function store() {
        $this->validate();
        // dd($this->nama);

        ModelsCategory::create ([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Data Berhasil Ditambah.');
        $this->format();
    }

    public function edit(ModelsCategory $category ) {
        // dd($category);
        $this->format();
        $this->edit = true;
        $this->nama = $category->nama;
        $this->category_id = $category->id;
    }

    public function update(ModelsCategory $category) {
        $this->validate();

        $category->update([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);
        session()->flash('sukses', 'Data Berhasil Diupdate.');
        $this->format();
    }

    public function destroy(ModelsCategory $category) {
        $category->delete();

        session()->flash('sukses', 'Data Berhasil Dihapus.');
        
        $this->format();
    }

    public function delete($id) {

        $this->format();

        $this->delete = true;
        $this->category_id = $id;
        // dd($id);
    }

    public function render()
    {
        return view('livewire.category', [
            'category' => ModelsCategory::latest()->paginate(3)
        ]);
    }
    public function format() {
        unset($this->category_id);
        unset($this->nama);
        unset($this->create);
        unset($this->delete);
    }
}
