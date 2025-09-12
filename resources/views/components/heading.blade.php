@props([
    'size' => 'base',
    'tag' => 'p',
])

@php
$sizeClasses = [
    'sm' => 'text-lg font-semibold',
    'base' => 'text-xl font-semibold',
    'lg' => 'text-2xl font-bold tracking-tight',
    'xl' => 'text-3xl font-bold tracking-tight',
    '2xl' => 'text-4xl font-bold tracking-tight',
][$size] ?? 'text-xl font-semibold';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $sizeClasses]) }}>
    {{ $slot }}
</{{ $tag }}>
