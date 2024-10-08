@props(['tag', 'size' => 'base'])

@php
    $defaultClass = 'bg-white/10 rounded-xl font-bold hover:bg-white/25 transition-colors duration-300';

    if ($size === 'base') {
        $defaultClass .= ' px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $defaultClass .= ' px-3 py-1 text-2xs';
    }
@endphp

{{-- <a href="" class="{{ $defaultClass }}">{{ $slot }}</a> --}}
<a href="/tag/{{ $tag->name }}" class="{{ $defaultClass }}">{{ $tag->name }}</a>
