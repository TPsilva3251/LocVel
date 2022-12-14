<div>
    <form>
        <input type="hideen" {{ $manufacturersid }}>
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
                        placeholder="Fabricantes" wire:model="manufacturers" />
                </div>
                {{-- Seção de erro --}}
                <div class="bg-red-500 text-white text-center rounded-md mb-1">
                    @error('manufacturers')
                        {{ $message }}
                    @enderror
                </div>
                <button
                    class="btn-green hover:bg-green-700 hover:p-2"
                    wire:click.prevent="update({{ $manufacturersid }})">Alterar</button>
                <button
                    class="btn-red hover:bg-red-700 hover:p-2"
                    wire:click.prevent="resetfields()">Cacelar</button>
            </div>
        </div>
    </form>
</div>
