@props(['tag', 'size' => 'base'])

@php

$classes = 'rounded-xl bg-white/5 hover:bg-white/15 transition-colors duration-300 cursor-pointer
font-medium';

if ($size === 'base') {
$classes .= ' text-base px-5 py-1';
}

if ($size === 'small') {
$classes .= ' text-2xs px-3 py-1';
}

@endphp

<a href="/tag/{{ strtolower($tag->name) }}" class="{{ $classes }}">
    {{ $tag->name }}
</a>