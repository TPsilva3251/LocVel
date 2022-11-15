<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    // protected $paginationTheme = 'bootstrap';
    
    public $categoria;
    public $update = false;
   
    public function render()
    {
        $categorias = Category::get();
        return view('livewire.categories', [
            'categorias' =>Category::paginate(6),
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
        $categoria = '';
        $update = false;
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
        $this->update = true;
        dd($this->update, $id);
    }
}
