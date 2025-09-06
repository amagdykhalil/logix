@props(['svg'])

<div data-aos="flip-down"
    class="md:w-[234.75px] w-[calc(50%-12.5px)] h-[80px] sm:h-[87px] lg:h-[95px]
         bg-white border-[0.8px] border-[#F4F4F4]
         rounded-[8px] p-[10px] m:p-[20px]
         flex items-center justify-center">
    <img src="{{ asset($svg) }}" alt=""
        class="w-[100px] sm:w-[110px] lg:w-auto md:max-w-full md:max-h-full object-contain" />
</div>
