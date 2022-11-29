<div class="px-6 pt-6 ">
    <div>
        <nav class="flex h-9 items-center justify-between" aria-label="Global">
            <div class="flex lg:min-w-0 " aria-label="Global">
                <a href="/" class="-m-1.5 p-1.5">
                    <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
            </div>
            @if (isset(Auth::user()->name))
                {{-- @if ($rule->id == 1) --}}
                <div class="h-4 grid grid-cols-1 gap-y-3 md:hidden">
                    <a href="/categories" class="font-semibold text-gray-900 hover:text-gray-900">Categorias</a>
    
                    <a href="/cars" class="font-semibold text-gray-900 hover:text-gray-900">Carros</a>
    
                    <a href="/manufacturers" class="font-semibold text-gray-900 hover:text-gray-900">Fabricantes</a>
    
                    <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Lojas</a>
                    <hr>
                    <a href="#"
                        class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Log
                        in</a>
                </div>
    
                <div class="hidden md:flex md:min-w-0  md:justify-center md:gap-x-12">
                    <a href="/categories" class="font-semibold text-gray-900 hover:text-gray-900">Categorias</a>
    
                    <a href="/cars" class="font-semibold text-gray-900 hover:text-gray-900">Carros</a>
    
                    <a href="/manufacturers" class="font-semibold text-gray-900 hover:text-gray-900">Fabricantes</a>
    
                    <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Lojas</a>
    
                </div>
                {{-- @else
                <h1>Sem permissão!</h1>
                @endif --}}
            @else
                <h1>Sem login!</h1>
            @endif
            {{-- <div class="hidden md:flex md:min-w-0  md:justify-end">
                <a href="#"
                    class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Log
                    in</a>
            </div> --}}
            <div class="ml-3 relative">
                @if (isset(Auth::user()->name ))
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition">
                                    @if (isset(Auth::user()->name ))
                                    {{ Auth::user()->name }}
                                    
                                    @endif
                                   
                                    {{-- <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg> --}}
                                </button>
                            </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
                @else<span class="inline-flex rounded-md">
                    <a href="/login">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition">
                      
                            <span class="font-bold">Login</span>
                            {{-- <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg> --}}
                        </button>
                    </a>
                </span>
                @endif
            </div>
        </nav>
    </div>
</div>
<br>
