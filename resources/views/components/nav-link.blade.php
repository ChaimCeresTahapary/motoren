{{--@props(['active'])--}}

{{--@php--}}
{{--$classes = ($active ?? false)--}}
{{--            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'--}}
{{--            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';--}}
{{--@endphp--}}

{{--<a {{ $attributes->merge(['class' => $classes]) }}>--}}
{{--    {{ $slot }}--}}
{{--</a>--}}

{{--<a {{ $attributes }}>{{ $slot }}</a>--}}
{{--<a class="{{ Request::is('/') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">{{$slot}}</a>--}}

<a
    href="{{ $attributes['href'] }}"
    class="rounded-md px-3 py-2 text-sm font-medium
        {{ Request::is('/') && $attributes['href'] === '/' ? 'bg-gray-950/50 text-white' : '' }}
        {{ Request::is(trim($attributes['href'], '/')) && $attributes['href'] !== '/' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
    {{ $slot }}
</a>
