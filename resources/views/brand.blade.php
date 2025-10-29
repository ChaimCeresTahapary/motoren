<x-layout>
    <x-slot:heading>
        Brand {{$brand['title'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg"> {{ $brand['title'] }}</h2>
    <p>
        This bike is a {{ $brand['category_id'] }} bike.
    </p>
</x-layout>
