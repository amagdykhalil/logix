@props([
    'isActive' => true,
])

@php
    // Cast string "false" to boolean false
    $isActive = filter_var($isActive, FILTER_VALIDATE_BOOLEAN);

    $baseClasses =
        'transition-colors w-full h-[50px] lg:h-[55px] rounded-[8px] py-[5px] px-[15px] flex items-center justify-center gap-[10px] outline-none font-[400] text-sm lg:text-base leading-[100%] tracking-[0] text-center';

    $colorClasses = $isActive
        ? 'bg-primary-soft text-white hover:bg-primary-softDark'
        : 'bg-[#F8F8F8] hover:bg-primary-softDark text-gray-500';
@endphp

<button {{ $attributes->merge(['class' => "$baseClasses $colorClasses"]) }}>
    {{ $slot }}
</button>
