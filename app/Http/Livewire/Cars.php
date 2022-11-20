<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Category;
use App\Models\Manufacturer;
use Livewire\Component;
use Livewire\WithPagination;

class Cars extends Component
{
    use WithPagination;

    public $modelo, $fabricante, $categoria, $portas, $direcao, $cambio,
    $airbag, $abs, $vidro, $ar, $carid;

    public $update = false;

    public function render()
    {
        $categorias = Category::get();
        $manufacturers = Manufacturer::get();
        $cars = Car::with('manufacture')->paginate(4);
        $category = Car::with('category')->get();
        return view('livewire.cars', compact('categorias', 'manufacturers', 'cars', 'category'));
    }

    protected $rules = [
        'modelo' => 'required|min:3|max:50',
        'fabricante' => 'required',
        'categoria' => 'required',
        'portas' => 'required',
        'direcao' => 'required',
        'cambio' => 'required',
        'airbag' => 'required',
        'abs' => 'required',
        'vidro' => 'required',
        'ar' => 'required',
    ];

    protected $messages = [
        'modelo.required' => 'O campo modelo é obrigatório!',
        'modelo.min' => 'Tamanho mínimo 3 digitos!',
        'modelo.max' => 'Tamanho máximo 50 digitos!',
        'fabricante.required' => 'O campo fabricante é obrigatório!',
        'categoria.required' => 'O campo categoria é obrigatório!',
        'portas.required' => 'O campo portas é obrigatório!',
        'direcao.required' => 'O campo direção é obrigatório!',
        'cambio.required' => 'O campo câmbio é obrigatório!',
        'airbag.required' => 'O campo airbag é obrigatório!',
        'abs.required' => 'O campo abs é obrigatório!',
        'vidro.required' => 'O campo vidros é obrigatório!',
        'ar.required' => 'O campo ar é obrigatório!',
    ];

    public function resetfields()
    {
        $this->modelo = '';
        $this->fabricante = '';
        $this->categoria = '';
        $this->portas = '';
        $this->direcao = '';
        $this->cambio = '';
        $this->airbag = '';
        $this->abs = '';
        $this->vidro = '';
        $this->ar = '';
        $this->update = false;
    }

    public function store()
    {
        $this->validate();

        Car::create([
            'model' => $this->modelo,
            'manufacture_id' => $this->fabricante,
            'category_id' => $this->categoria,
            'doors' => $this->portas,
            'direction' => $this->direcao,
            'exchange' => $this->cambio,
            'airbag' => $this->airbag,
            'abs' => $this->abs,
            'glass' => $this->vidro,
            'air' => $this->ar,
        ]);
        $this->resetfields();

        session()->flash('message', 'Registro criado com sucesso!');
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $this->modelo = $car->model;
        $this->fabricante = $car->manufacture;
        $this->categoria = $car->category;
        $this->portas = $car->doors;
        $this->direcao = $car->direction;
        $this->cambio = $car->exchange;
        $this->airbag = $car->airbag;
        $this->abs = $car->abs;
        $this->vidro = $car->glass;
        $this->ar = $car->air;
        $this->carid = $car->id;
        $this->update = true;
    }

    public function update($id)
    {
        $this->validate();

        Car::find($id)->fill([
            'model' => $this->modelo,
            'manufacture_id' => $this->fabricante,
            'category_id' => $this->categoria,
            'doors' => $this->portas,
            'direction' => $this->direcao,
            'exchange' => $this->cambio,
            'airbag' => $this->airbag,
            'abs' => $this->abs,
            'glass' => $this->vidro,
            'air' => $this->ar,
        ])->save();

        $this->resetfields();

        session()->flash('message','Registro alterado com sucesso!');
    }

    public function delete($id)
    {
        Car::find($id)->delete();

        session()->flash('message', 'Registro excluído com sucesso!');
    }
}
