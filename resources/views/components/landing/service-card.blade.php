{{-- resources/views/components/service-card.blade.php --}}
@props(['number', 'title', 'description'])

{{-- 
  Push this style block only once per page.
  Make sure you have @stack('styles') in your <head>.
--}}
@once
    @push('styles')
        <style>
            /* only outline/stroke styles now; sizing comes from Tailwind */
            .number {
                color: transparent;
                -webkit-text-stroke: 0.8px #84B156;
                text-stroke: 0.8px #84B156;
            }

            .s-card {
                border: 1px solid #E9EBEF80;
                box-shadow: 0px 10px 20px 0px #B1B4B91A;
            }
        </style>
    @endpush
@endonce

<div data-aos="flip-right"
    class="
        s-card
        bg-white
        rounded-lg
        duration-200
        flex items-start justify-between
        group
        
        /* sizing */
        lg:w-[385px] w-[calc(50%-12.5px)]
        h-auto md:min-h-[150px]
        
        /* padding */
        px-3 md:px-4
        py-4 md:py-[30px]
        
        /* gap */
        gap-3 md:gap-5
        
        /* hover */
        hover:bg-primary-dark
    ">
    <div class="mt-2">
        <span
            class="
                number
                inline-flex items-center justify-center
                w-[20px] md:w-[25px]
                h-[30px] md:h-[38px]
                
                /* typography */
                font-normal
                text-[16px] md:text-[20px]
                leading-[30px] md:leading-[38px]
                text-center
            ">
            {{ $number }}
        </span>
    </div>

    <div>
        <h3
            class="
                text-base md:text-lg
                font-[500]
                text-gray-800
                mb-2 md:mb-[10px]
                group-hover:text-white
            ">
            {{ $title }}
        </h3>

        <p
            class="
                text-xs md:text-sm
                text-[#012839ad]
                leading-[180%]
                group-hover:text-primary-grayWhite
            ">
            {{ $description }}
        </p>
    </div>
</div>
