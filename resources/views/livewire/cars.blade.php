<div>
    {{-- Titulo da página --}}
    <title>LocVel - Carros</title>
    {{--  --}}


    @include('livewire.navbar')

    @if ($update)
        @include('livewire.Cars.update')
    @else
        @include('livewire.Cars.create')
    @endif


    {{--  --}}
    <br>
    <hr>
    <br>
    {{-- Seção de sucesso --}}
    @if (session()->has('message'))
        <div
            class=" text-white text-center bg-green-500 w-96  mx-auto rounded-md border-solid border-2 border-green-600">
            {{ session('message') }}
        </div>
    @endif
    {{--  --}}
    <div class="flex flex-col justify-center items-center">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm text-center  text-gray-900 px-6 py-4">
                                    Modelo
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Fabricante
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Categoria
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Portas
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Direção
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Câmbio
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    AirBag
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Vidro Elétrico
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Ar Concionado
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                                <tr class="border-b">
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->model }}
                                    </td>
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->manufacture->name }}
                                    </td>
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->category->name }}
                                    </td>
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->doors }}
                                    </td>
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->direction == 1 ? 'MECANICA' : ($car->direction == 2 ? 'HIDRÁULICA' : 'ELÉTRICA') }}
                                    </td>
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->exchange == 1 ? 'MANUAL' : 'AUTOMÁTICO' }}
                                    </td>
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->airbag == 1 ? 'SIM' : 'NÃO' }}
                                    </td>
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->glass == 1 ? 'SIM' : 'NÃO' }}
                                    </td>
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $car->air == 1 ? 'SIM' : 'NÃO' }}
                                    </td>
                                    <td class="text-sm text-center text-gray-900  px-6 py-4 whitespace-nowrap">
                                        <button
                                            class="btn-yellow px-3 py-1 mx-1 border-solid border-yellow-400 rounded-md hover:bg-yellow-500"
                                            wire:click.prevent='edit({{ $car->id }})'>Editar</button>
                                        <button
                                            class="btn-red px-3 py-1 mx-1 border-solid border-red-600 rounded-md hover:bg-red-700"
                                            wire:click.prevent='delete({{ $car->id }})'>Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    @include('livewire.Cars.pagination')
                </div>
            </div>
        </div>
    </div>
</div>
