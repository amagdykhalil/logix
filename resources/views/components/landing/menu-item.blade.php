@props([
    'label', // Arabic text string
    'disabled' => false, // true for a dimmed, non‐clickable item
])

@php
    // Base classes for font, sizing and alignment
    $base = 'w-full text-[13px] leading-[33px] tracking-[0%] align-middle font-[400] rounded-[8px] text-center';

    // Background + text colors
    $bgColor = !$disabled ? 'bg-[#84B156] text-white' : 'bg-[#B9B9B9] text-black';

    // Disabled styling
    $disabledClass = $disabled
        ? 'opacity-50 cursor-not-allowed border-[0.8px] border-[#ECECEC] bg-[#FAFBFA] text-gray-400'
        : 'hover:opacity-80 cursor-pointer';
@endphp

<button {{ $disabled ? 'disabled' : '' }}
    class="{{ $base }}  {{ $bgColor }} {{ $disabledClass }} px-4 py-0">
    {{ $label }}
</button>
