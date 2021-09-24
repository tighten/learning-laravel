@props(['label', 'value', 'itemClasses', 'labelClasses'])

<div class="table-row {{ $itemClasses ?? '' }}">
    <div class="table-cell font-semibold pr-3 {{ $labelClasses ?? '' }}">{{ $label }}</div>
    <div class="table-cell">{{ $value }}</div>
</div>
