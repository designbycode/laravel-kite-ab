<a {{ $attributes->merge(['class' => 'text-sm font-medium transition-colors ' . $linkClasses()]) }}>
    {{ $slot }}
</a>
