@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-2 focus:border-lightAccent-500 focus:outline-none focus:ring-2 focus:ring-lightAccent focus:ring-opacity-25']) !!}>
