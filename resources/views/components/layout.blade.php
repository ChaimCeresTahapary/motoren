<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MotorcyclesClub - Home </title>
</head>
<body>
    <nav>
        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            Dashboard
        </x-nav-link>

        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/about-us">About</x-nav-link>
        <x-nav-link href="/contact-page">Contact</x-nav-link>
    </nav>

    {{ $slot }}
</body>
</html>
