<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
<a href="{{ route('categorias.index') }} " >categorias</a>
<a heref="{{route('categorias.index') }}">Subcategoria</a>
<a heref="{{route('categorias.index') }}">Productos</a>
<a heref="{{route('categorias.index') }}">Usuarios</a>
</x-app-layout>
