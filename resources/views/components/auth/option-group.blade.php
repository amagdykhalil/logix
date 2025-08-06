@props([
    'title' => '',
    'options' => [], // array: [['text' => '...', 'is_active' => true/false]]
])

@php
    $defaultIndex = collect($options)->search(fn($opt) => $opt['is_active']) ?? 0;
@endphp

<div {{ $attributes }}>
    <div dir="rtl" x-data="{ activeIndex: {{ $defaultIndex }} }">
        <p class="text-primary-dark text-sm mb-[15px]">
            {{ $title }}
        </p>

        <div class="flex flex-wrap gap-5">
            @foreach ($options as $index => $option)
                <button type="button" @click="activeIndex = {{ $index }}"
                    :class="activeIndex === {{ $index }} ? 'bg-primary-soft text-white hover:bg-primary-softDark' :
                        'bg-[#F8F8F8] text-gray-500'"
                    class="!w-[112px] !text-sm transition-colors h-[50px] lg:h-[55px] rounded-[8px] py-[5px] px-[15px] flex items-center justify-center gap-[10px] outline-none font-[400] lg:text-base leading-[100%] tracking-[0] text-center">
                    {{ $option['text'] }}
                </button>
            @endforeach
        </div>
    </div>
</div>
