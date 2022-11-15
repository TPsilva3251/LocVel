<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categoria;
   
    public function render()
    {
        $categorias = Category::paginate(6);
        return view('livewire.categories', compact('categorias'));
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
}
