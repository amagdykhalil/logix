@props([
    // allow extra classes to be passed in
    'label',
    'slot',
])

<div class="max-w-[1203px] mx-auto h-full flex flex-col items-center ">
    <div class="flex flex-col items-center justify-center px-4 pb-12 sm:px-6">
        <x-landing.section-label class="text-center">
            {{ $label }}
        </x-landing.section-label>
        <p dir="rtl"
            class="mt-4 font-medium text-[20px] sm:text-[22px] md:text-[26px] leading-[1.6] tracking-[-1%] text-right capitalize text-black">
            {{ $slot }}
        </p>

    </div>
</div>
