<x-layout>
    <x-slot:heading>
        Brand listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/brand/3">
                    <strong>{{ $job ['title'] }}: </strong> This motorcycle is a {{ $job ['category'] }} bike
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
