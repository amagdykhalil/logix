@props(['title', 'subtitle' => null, 'description', 'svg'])

<div
    class="p-4  sm:p-6 lg:p-7 pt-8 sm:pt-12 lg:pt-[60px] flex justify-center flex-1 h-full hover:bg-primary-dark border-t-[3px] lg:border-t-[5px] hover:border-[#84B156] bg-white group transition-colors">
    <div class="flex flex-col sm:flex-row gap-3 sm:gap-2 lg:gap-[10px] items-center sm:items-start">
        <!-- SVG Icon - Top on mobile, right on desktop -->
        <div class="order-1 sm:order-2 flex-shrink-0">
            <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 flex items-center justify-center">
                {!! $svg !!}
            </div>
        </div>

        <!-- Text Content - Bottom on mobile, left on desktop -->
        <div dir="rtl" class="order-2 sm:order-1 text-center sm:text-right">
            <p
                class="text-lg sm:text-xl lg:text-[27px] leading-[1.2] lg:leading-[100%] text-primary-dark group-hover:text-white font-[400] mb-2 lg:mb-3">
                {{ $title }}
            </p>
            <p
                class="text-sm sm:text-base lg:text-[25px] text-[#012839c5] group-hover:text-primary-grayWhite font-[300] leading-[1.4] lg:leading-[1.6]">
                @if ($subtitle)
                    <span class="block sm:inline">{{ $subtitle }}</span>
                    <br class="hidden sm:block">
                @endif
                {{ $description }}
            </p>
        </div>
    </div>
</div>
