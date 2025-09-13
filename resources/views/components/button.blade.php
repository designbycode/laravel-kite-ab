<button {{ $attributes->merge(['class' => 'inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ' . $buttonClasses()]) }}>
    {{ $slot }}
</button>
