<x-layout>
    <x-slot:heading>
        Brand listing
    </x-slot:heading>

    <ul>
        @foreach ($brands as $brand)
            <li>
                <a href="/brands/{{ $brand['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $brand ['title'] }}: </strong> This motorcycle is a {{ $brand['category_id'] }} bike
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
