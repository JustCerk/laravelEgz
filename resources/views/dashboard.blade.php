<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-nav-link :href="route('gaunamos')" :active="request()->routeIs('gaunamos')">
                    <x-primary-button type="button" class="mt-4">
                        {{ __('Gaunamos sąskaitos') }}
                    </x-primary-button>
                </x-nav-link>
                <x-nav-link :href="route('israsomos')" :active="request()->routeIs('israsomos')">
                    <x-primary-button type="button" class="mt-4">
                        {{ __('Išrašomos sąskaitos') }}
                    </x-primary-button>
                </x-nav-link>
            </div>
        </div>
    </div>
</x-app-layout>
