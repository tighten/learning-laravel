<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl">
            {{ __(ucfirst($name)) }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="sm:px-6 lg:px-8">
            <x-table :name="$name" :param="$param" :headers="$headers" :fields="$fields" :rows="$rows" />
        </div>
    </div>
</x-app-layout>
