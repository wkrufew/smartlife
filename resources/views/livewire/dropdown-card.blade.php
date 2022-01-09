<div>
   
    <x-jet-dropdown align="right" width="80">
        <x-slot name="trigger">
            <span class="relative">
                <div class="text-white flex flex-col items-center justify-center px-1 cursor-pointer font-semibold h-full">
                    <x-cart size="30" color="white"/>
                    {{-- <div class="text-xs">Total: <span class="text-xs bg-sky-700 rounded-full px-1.5 py-0.5">$ 11.99</span></div> --}}
                </div>
                {{-- <span class="absolute top-2 right-3 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">99</span> --}}
                <span class="absolute top-0 right-0  w-2 h-2 transform translate-x-11 -translate-y-1/2 bg-red-600 rounded-full"></span>
            </span>
        </x-slot>

        <x-slot name="content">
            <div class="block px-4 py-2 text-xs text-gray-400">
                Articulos en el carrito de compras
            </div>

            <x-jet-dropdown-link href="">
                Carrito sin articulo
            </x-jet-dropdown-link>
            
                <a href="/" class="block px-4 py-2 text-xs text-gray-400 hover:underline">
                    Agregar un producto al carrito
                </a>
            
        </x-slot>
    </x-jet-dropdown>
</div>
