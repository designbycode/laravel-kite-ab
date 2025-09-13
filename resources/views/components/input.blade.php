@php
$inputClasses = 'flex h-10 w-full rounded-md border border-input bg-background py-2 px-3 text-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50';
@endphp

@if ($label)
    <div class="space-y-2">
        <x-kite::label :for="$attributes->get('id') ?: $attributes->get('name')">
            {{ $label }}
        </x-kite::label>

        <input {{ $attributes->merge(['class' => $inputClasses]) }}>
    </div>
@else
    <input {{ $attributes->merge(['class' => $inputClasses]) }}>
@endif
