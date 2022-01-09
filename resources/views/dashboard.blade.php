<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} pilas papi
        </h2>
    </x-slot>

    <div class="py-12">

        <h1 class="text-sky-400">Hola papi</h1>
        <h1 class="text-orange-400">Hola papi</h1>
        <h1 class="text-purple-400">Hola papi</h1>
        <h1 class="text-cyan-400">Hola papi</h1>
        <h1 class="text-greenLime-400">Hola papi</h1>
        <h1 class="text-trueGray-400">Hola papi</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
