<nav class="bg-cyan-400 text-sky-50 fixed inset-x-0" x-data="dropdown()">
    <div class="container flex justify-between items-center md:space-x-6 h-14">
        <a class="order-2 md:order-1" href="/">
            <x-jet-application-mark class="block h-10 md:h-12 w-auto" />
        </a>
        <a :class="{'bg-white rounded-t-md text-sky-700' : open , 'bg-sky-700 text-white rounded-md' : !open}" 
        x-on:click="show()" 
        class="order-1 md:order-2  select-none  text-white flex flex-col items-center justify-center px-2 py-1 h-14 md:h-full cursor-pointer font-semibold ">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span class="text-xs hidden md:block">Categorias</span>
        </a>
        <div class="flex-1 hidden md:block order-3">
            @livewire('search')
        </div>

        <!-- Settings Dropdown de el perfil de usuario-->
        <div class="relative order-4 hidden md:block">
            @auth
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex text-sm border-2 border-white rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Opciones
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>
                        <a href="{{ route('profile.show') }}">perfil</a>

                        <div class="border-t border-gray-100"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            @else
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        {{-- <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button> --}}
                        <i class="fas fa-user-circle text-4xl cursor-pointer"></i>
                    </x-slot>

                    <x-slot name="content">
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Opciones
                        </div>

                        <x-jet-dropdown-link href="{{ route('login') }}">
                            Iniciar Sesión
                        </x-jet-dropdown-link>
                        <x-jet-dropdown-link href="{{ route('register') }}">
                            Crear un cuenta
                        </x-jet-dropdown-link>
                    </x-slot>
                </x-jet-dropdown>
            @endauth
        </div>
        
        <div class="order-5 items-center justify-center">
            @livewire('dropdown-card')
        </div>
       
    </div>

    <div 
        id="navigation-menu"
        :class="{ 'block': open, 'hidden': !open }"
        class=" w-full bg-trueGray-500 bg-opacity-25 absolute hidden">
        {{-- menu escritorio --}}
        <div class="container h-full hidden md:block">
            <div x-on:click.away="close()" class="grid grid-cols-4 h-full relative">
                <ul class="bg-white py-6">
                    @foreach ($categories as $category)
                        <li class="navigation-link text-trueGray-700 font-semibold hover:bg-sky-600 hover:text-white rounded-sm">
                            <a href="" class="px-3 py-1 text-base flex items-center">
                                <span class="flex justify-center w-9">
                                    {!! $category->icon !!}
                                </span>
                                {{$category->name}}
                            </a>

                            <div class="navigation-submenu bg-trueGray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                                <x-navigation-subcategories :category="$category"/>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="col-span-3 bg-trueGray-100">
                    <x-navigation-subcategories :category="$categories->first()"/>
                </div>
            </div>
        </div>
        {{-- menu movil --}}
        <div class="bg-white h-full overflow-y-auto">
            <div class="container bg-sky-200 py-3 mb-2">
                @livewire('search')
            </div>
            <ul>
                @foreach ($categories as $category)
                    <li class="text-trueGray-600 font-semibold hover:bg-sky-600 hover:text-white ">
                        <a href="" class="px-3 py-2 text-sm flex items-center">
                            <span class="flex justify-center w-9">
                                {!! $category->icon !!}
                            </span>
                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="border-t border-gray-200 mx-4 mt-2"></div>
            <div class="block px-5 py-2 text-xs text-gray-400">
                USUARIOS
            </div>

            <div class="border-t border-gray-200 mx-4"></div>
            @livewire('card-movil')
            @auth
                <div class="mx-2   font-semibold text-trueGray-600">
                    <x-jet-dropdown-link href="{{ route('profile.show') }}" class="">
                        <i class="fas fa-id-card mr-2"></i>Perfil
                    </x-jet-dropdown-link>
                    <a href="{{ route('profile.show') }}">perfil</a>
        
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt mr-2"></i>Cerrar Sesion
                        </x-jet-dropdown-link>
                    </form>
                </div>
            @else
                <div class="mx-2   font-semibold text-trueGray-600">
                    <x-jet-dropdown-link href="{{ route('login') }}" class="">
                        <i class="fas fa-user-circle mr-2"></i>Iniciar Sesion
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="{{ route('register') }}" class="">
                        <i class="fas fa-user-plus mr-2"></i>Crear una cuenta
                    </x-jet-dropdown-link>
                </div>
            @endauth
        </div>
    </div>
</nav>

