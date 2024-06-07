<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('Acceuil') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px lg:px">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
