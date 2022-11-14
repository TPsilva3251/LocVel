<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categoria;
   
    public function render()
    {
        return view('livewire.categories');
    }

    public function store()
    {
        $name = $this->categoria;
        // faltar rodar migration para salvar
    }
}
