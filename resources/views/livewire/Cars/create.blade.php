<div>
    <div class="mx-4">
        <form>
            <div class="flex flex-row ml-4 gap-3">
                <div class="mr-1">
                    <label for="" class="label">Modelo</label>
                    <input
                        class="form-control
                    block
                    w-64
                    px-2
                    py-1
                    mt-1
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
                        placeholder="EX:Gol" wire:model.prevent="modelo">
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">Fabricante</label>
                    <select
                        class="form-select appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="fabricante">
                        <option selected class="uppercase">Fabricante</option>
                        @foreach ($manufacturers as $manufacture)
                            <option class="uppercase" value={{ $manufacture->id }}>{{ $manufacture->name }}</option>
                        @endforeach

                    </select>
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">Categoria</label>
                    <select
                        class="form-select appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="categoria">
                        <option selected class="uppercase">Categoria</option>
                        @foreach ($categorias as $categoria)
                            <option class="uppercase" value={{ $categoria->id }}>{{ $categoria->name }}</option>
                        @endforeach

                    </select>
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">Portas</label>
                    <select
                        class="form-select appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="portas">
                        <option selected>Portas</option>
                        <option value=2>2</option>
                        <option value=4>4</option>
                    </select>
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">Direção</label>
                    <select
                        class="form-select appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="direcao">
                        <option selected class="uppercase">Direção</option>
                        <option class="uppercase" value=1>Mecânica</option>
                        <option class="uppercase" value=2>Hidráulica</option>
                        <option class="uppercase" value=3>Elétrica</option>
                    </select>
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">Cambio</label>
                    <select
                        class="form-select appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="cambio">
                        <option selected class="uppercase">Câmbio</option>
                        <option class="uppercase" value=1>Manual</option>
                        <option class="uppercase" value=2>Automático</option>
                    </select>
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">AirBag</label>
                    <select
                        class="form-select appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="airbag">
                        <option selected class="uppercase">AirBag</option>
                        <option value=1>SIM</option>
                        <option value=2>NÃO</option>
                    </select>
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">ABS</label>
                    <select
                        class="form-select appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="abs">
                        <option selected class="uppercase">ABS</option>
                        <option value=1>SIM</option>
                        <option value=2>NÃO</option>
                    </select>
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">Vidros</label>
                    <select
                        class="form-select appearance-none
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="vidro">
                        <option selected class="uppercase">Vidro Elétrico</option>
                        <option value=1>SIM</option>
                        <option value=2>NÃO</option>
                    </select>
                </div>
                {{--  --}}
                <div class="mr-1">
                    <label for="" class="label">Ar</label>
                    <select
                        class="form-select appearance-none 
                        block
                        w-full
                        px-2
                        py-1
                        mt-1
                        text-md
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example" wire:model.prevent="ar">
                        <option selected class="uppercase">Ar Condicionado</option>
                        <option value=1>SIM</option>
                        <option value=2>NÃO</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="flex flex-row-reverse mx-28 mt-4 gap-4">
                    <button class="btn-green px-11 hover:bg-green-700 hover:font-bold"
                        wire:click.prevent="store()">Salvar</button>
                    <button class="btn-red px-8 hover:bg-red-700 hover:font-bold" wire:model.prevent="resetfields()">Limpar</button>
                </div>
            </div>
        </form>
    </div>
</div>
