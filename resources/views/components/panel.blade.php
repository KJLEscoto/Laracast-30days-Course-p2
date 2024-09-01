@php
    $classes = 'p-4 bg-white/5 border border-white/5 rounded-xl space-y-2 hover:border-blue-700 hover:border group
    transition-colors duration-300'
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>