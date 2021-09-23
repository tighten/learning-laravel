@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-light text-base font-medium text-light focus:outline-none focus:light focus:border-light transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-lightAccent hover:lightAccentHover hover:border-lightAccentHover focus:outline-none focus:text-lightAccentHover focus:border-lightAccentHover transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
