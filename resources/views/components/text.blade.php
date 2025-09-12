@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'text-base text-slate-700']) }}>
    {{ $slot }}
</{{ $tag }}>
