@props(['svg'])

<div data-aos="flip-down"
    class="w-[234.75px] h-[95px]
         bg-white  border-[0.8px] border-[#F4F4F4]
         rounded-[8px] p-[20px]
         flex items-center justify-center">
    <img src="{{ asset($svg) }}" alt="" class="max-w-full max-h-full object-contain" />
</div>
