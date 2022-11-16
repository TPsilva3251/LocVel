<div>
    {{-- Titulo da página --}}
    <title>LocVel - Fabricantes</title>
    {{--  --}}

    @include('livewire.navbar')

    @if ($update)
        @include('livewire.Manufacturers.update')
    @else
        @include('livewire.Manufacturers.create')
    @endif

    <br>
    {{-- Seção de sucesso --}}
    @if (session()->has('message'))
        <div
            class=" text-white text-center bg-green-500 w-96  mx-auto rounded-md border-solid border-2 border-green-600">
            {{ session('message') }}
        </div>
    @endif
    {{--  --}}
    @if ($manufactures)
        <div class="flex flex-col justify-center items-center">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b">
                                <tr>
                                    <th scope="col" class="text-sm text-center  text-gray-900 px-6 py-4">
                                        Fabricantes
                                    </th>
                                    <th scope="col" class="text-sm text-center text-gray-900 px-6 py-4">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($manufactures as $manufacture)
                                    <tr class="border-b">
                                        <td
                                            class="text-sm text-center uppercase text-gray-900 px-6 py-4 whitespace-nowrap">
                                            {{ $manufacture->name }}
                                        </td>
                                        <td class="text-sm text-center text-gray-900  px-6 py-4 whitespace-nowrap">
                                            <button
                                                class="btn-yellow px-3 py-1 mx-1 border-solid border-yellow-400 rounded-md hover:bg-yellow-500"
                                                wire:click.prevent='edit({{ $manufacture->id }})'>Editar</button>
                                            <button
                                                class="btn-red px-3 py-1 mx-1 border-solid border-red-600 rounded-md hover:bg-red-700"
                                                wire:click.prevent='delete({{ $manufacture->id }})'>Excluir</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        @include('livewire.Manufacturers.pagination')
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>deu</p>
    @endif
</div>
