@props([
    'number' => 1, // the big number (e.g. 3)
    'title', // main heading
    'description', // supporting text
    'borderColor' => '#E7B070', // border color for icon container
    'numberPosition' => 'bottom', // 'top' or 'bottom' - determines number position
    'iconpath', // path to the icon file
])

<div data-aos="flip-up" class="w-[340px] h-[324px] bg-white rounded-lg p-6 pl-16 flex flex-col justify-center gap-6">

    <!-- Top: number + optional icon slot -->
    <div class="flex justify-end {{ $numberPosition === 'bottom' ? 'items-end' : 'items-start ml-[-11px]' }}">

        @isset($iconpath)
            <div class="p-[14px] rounded-xl border-4" style="border-color: {{ $borderColor }}">
                <img src="{{ $iconpath }}" alt="icon" class="w-8 h-8" />
            </div>
        @endisset

        {{-- Number badge --}}
        <div
            class="h-[39px] flex items-center justify-center mr-[50px] text-[64px] font-semibold leading-none text-[#DCDCDC]">
            {{ $number }}
        </div>

    </div>

    <div class='{{ $numberPosition === 'bottom' ? ' text-right' : '!text-center' }}'>
        <!-- Middle: title -->
        <h3 dir="rtl" class="mb-[12px] font-medium text-[20px] text-primary-dark">
            {{ $title }}
        </h3>

        <!-- Bottom: description -->
        <p dir="rtl" class="text-[17px] text-[#01283966] ">
            {{ $description }}
        </p>
    </div>

</div>
