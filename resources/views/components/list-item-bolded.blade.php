@props(['label', 'value', 'itemClasses', 'labelClasses'])

<li class="{{ $itemClasses ?? '' }}"><span class="font-semibold {{ $labelClasses ?? '' }}">{{ $label }}</span>{{ $value }}</li>
