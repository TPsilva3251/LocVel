<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';
    
    public $categoria, $categoriaid;
    public $update = false;
   
    public function render()
    {
        $categorias = Category::get();
        return view('livewire.categories', [
            'categorias' =>Category::paginate(4),
        ]);
    }

    // Validação

    protected $rules = [
        'categoria' => 'required|min:3|max:256',
    ];

    protected $messages = [
        'categoria.required' => 'Você deve colocar o nome da Categoria!',
        'categoria.min' => 'Tamanho mínimo 3 digitos!',
        'categoria.max' => 'Tamanho máximo 256 digitos!',
    ];

    public function resetfields()
    {
        $this->categoria = '';
        $this->categoriaid ='';
        $this->update = false;
    }

    public function store()
    {
        $this->validate();

        Category::create([
            'name' => $this->categoria
        ]);  

        $this->resetfields();

        session()->flash('message', 'Registro criado com sucesso!');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->categoria = $category->name;
        $this->categoriaid = $category->id;
        $this->update = true;
    }

    public function update($id)
    {        
        $this->validate();

        Category::find($id)->fill([
            'name' => $this->categoria
        ])->save();
        
        $this->resetfields();

        session()->flash('message', 'Registro alterado com sucesso!');
    }

    public function delete($id)
    {
        Category::find($id)->delete();

        session()->flash('message', 'Registro excluído com sucesso!');
    }
}
