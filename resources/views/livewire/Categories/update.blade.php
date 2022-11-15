<div>
    <form>
        <div class="flex flex-col justify-center items-center">
            <div class="grid grid-cols-1 gap-1">
                <div class="mb-3 xl:w-96">
                    <input type="text"
                        class="
                    form-control
                    block
                    w-full
                    px-2
                    py-1
                    mt-12
                    text-md
                    font-normal
                    text-gray-700
                    uppercase
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                  "
                        placeholder="Categoria" wire:model="categoria" />
                </div>
                {{-- Seção de erro --}}
                <div class="bg-red-500 text-white text-center rounded-md mb-1">
                    @error('categoria')
                        {{ $message }}
                    @enderror
                </div>
                <button
                    class="border border-solid border-green-600 bg-green-600 hover:bg-green-700 text-white rounded-md p-1 hover:p-2"
                    wire:click.prevent="store()">Alterar</button>
                <button
                    class="border border-solid border-red-600 bg-red-600 hover:bg-red-700 text-white rounded-md p-1 hover:p-2 mt-2"
                    wire:click.prevent='resetfields()'>Cacelar</button>
            </div>
        </div>
         {{-- Seção de sucesso --}}
    @if (session()->has('message'))
    <div class=" text-white text-center bg-green-500">
        {{ session('message') }}
    </div>
@endif
{{--  --}}
    </form>
   
</div>
