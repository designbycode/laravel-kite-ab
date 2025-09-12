@if ($label)
    <div class="space-y-2">
        <x-kite::label :for="$attributes->get('id') ?: $attributes->get('name')">
            {{ $label }}
        </x-kite::label>

        <input {{ $attributes->merge(['class' => 'flex h-10 w-full rounded-md border border-slate-300 bg-transparent py-2 px-3 text-sm placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50']) }}>
    </div>
@else
    <input {{ $attributes->merge(['class' => 'flex h-10 w-full rounded-md border border-slate-300 bg-transparent py-2 px-3 text-sm placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50']) }}>
@endif
