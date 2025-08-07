{{-- resources/views/components/service-card.blade.php --}}
@props(['number', 'title', 'description'])

{{-- 
  Push this style block only once per page.
  Make sure you have @stack('styles') in your <head>.
--}}
@once
    @push('styles')
        <style>
            .number {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 25px;
                height: 38px;
                color: transparent;
                /* apply the outline */
                -webkit-text-stroke: 0.8px #84B156;
                text-stroke: 0.8px #84B156;

                /* typography */
                font-family: 'Mooli', sans-serif;
                font-weight: 400;
                font-size: 20px;
                line-height: 38px;
                text-align: center;
            }

            .s-card {
                border: 1px solid #E9EBEF80;
                box-shadow: 0px 10px 20px 0px #B1B4B91A;

            }
        </style>
    @endpush
@endonce

<div data-aos="flip-right"
    class="s-card w-[385px] h-[150px] bg-white rounded-lg duration-200 px-4 py-[30px] flex items-start justify-between gap-5 hover:bg-primary-dark group">
    <div class="mt-2">
        <span class="number">{{ $number }}</span>
    </div>
    <div>
        <h3 class="text-lg font-[500] text-gray-800 mb-[10px] group-hover:text-white">{{ $title }}</h3>
        <p class="text-sm text-[#012839ad] leading-[180%] group-hover:text-primary-grayWhite">{{ $description }}</p>
    </div>
</div>
