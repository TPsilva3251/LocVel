<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Manufacturer;
use Livewire\WithPagination;

class Manufacturers extends Component
{
    use WithPagination;


    public $manufacturers, $manufacturersid;
    public $update = false;

    public function render()
    {
        $manufactures = Manufacturer::get();

        return view('livewire.manufacturers',[
            'manufactures' => Manufacturer::orderBy('name')->paginate(4),
        ]);
    }

    public function resetfields()
    {
        $this->manufacturers = '';
        $this->manufacturersid = '';
        $this->update = false;
    }

    protected $rules = [
        'manufacturers' => 'required|min:3|max:256',
    ];

    protected $messages = [
        'manufacturers.required' => 'Você deve colocar o nome do Fabricante!',
        'manufacturers.min' => 'Tamanho mínimo 3 digitos!',
        'manufacturers.max' => 'Tamanho máximo 256 digitos!', 
    ];

    public function store()
    {
        $this->validate();
        
        Manufacturer::create([
            'name' => $this->manufacturers
        ]);

        $this->resetfields();

        session()->flash('message', 'Registro criado com sucesso!');
    }

    public function edit($id)
    {
        $manufacture = Manufacturer::findOrFail($id);

        $this->manufacturers = $manufacture->name;
        $this->manufacturersid = $manufacture->id;
        $this->update = true;
    }

    public function update($id)
    {
        $this->validate();

        Manufacturer::find($id)->fill([
            'name' => $this->manufacturers,
        ])->save();

        session()->flash('message', 'Registro auterado com uscesso!');
    }

    public  function delete($id)
    {
        Manufacturer::find($id)->delete();

        session()->flash('message', 'Registro deletado com uscesso!');
    }
    
}
