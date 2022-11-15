<div>
    {{-- Titulo da página --}}
    <title>LocVel - Categorias</title>
    {{--  --}}


    @include('livewire.navbar')

    @if ($update)
        @include('livewire.Categories.update')
    @else
        @include('livewire.Categories.create')
    @endif


    <div class="flex flex-col justify-center items-center">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm text-center  text-gray-900 px-6 py-4">
                                    Categorias
                                </th>
                                <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                    Ações
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr class="border-b">
                                    <td class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                        {{ $categoria->name }}
                                    </td>
                                    <td class="text-sm text-center text-gray-900  px-6 py-4 whitespace-nowrap">
                                        <button
                                            class="text-black bg-yellow-400 px-3 py-1 mx-1 border-solid border-yellow-400 rounded-md hover:bg-yellow-500"
                                            wire:click.prevent='edit({{ $categoria->id }})'>Editar</button>
                                        <button
                                            class="text-white bg-red-600 px-3 py-1 mx-1 border-solid border-red-600 rounded-md hover:bg-red-700">Excluir</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    @include('livewire.Categories.pagination')
                </div>
            </div>
        </div>
    </div>
</div>
