@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'text-base text-muted-foreground']) }}>
    {{ $slot }}
</{{ $tag }}>
