@php
    $defaultClass = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-400 transition-all duration-500 group'
@endphp

<div
    {{ $attributes(['class' => $defaultClass ]) }}>
    {{ $slot }}
</div>
