<x-layout>
    <x-slot:heading>
        Brand {{$job['title'] }}
    </x-slot:heading>

    <h2 class="font-bold text-lg"> {{ $job['title'] }}</h2>
    <p>
        This bike is a {{ $job['category'] }} bike.
    </p>
</x-layout>
