    @props([
        'number', // integer
        'question', // string (Arabic)
        'answer', // string (Arabic)
        'isOpen' => false, // boolean
    ])

    <div
        class="w-full lg:w-[748px]
         bg-[#F9F9F9]
         border-[0.8px] border-[#ECECEC]
         rounded-[8px]
         opacity-100
         relative
         p-4 lg:p-[20px]">
        {{-- Right dashed line - Hidden on mobile --}}
        <div
            class="hidden lg:block absolute
           top-[23px] left-[746px]
           w-[60px] h-[3px]
           border-l-[1px] border-dashed border-[#ECECEC]
           rounded-[5px]">
        </div>

        {{-- Header: number, question, toggle icon --}}
        <div class="flex items-center justify-between">
            <div class="flex items-center flex-1 min-w-0">
                <span class="number-circle mr-2 lg:mr-4 flex-shrink-0">
                    {{ $number }}
                </span>
                <p
                    class="
               font-normal text-[14px] lg:text-[16px]
               leading-[120%] lg:leading-[100%]
               text-right text-primary-dark
               px-1 lg:px-2
               truncate lg:truncate-none">
                    {{ $question }}
                </p>
            </div>

            <div class="flex-shrink-0 ml-2 lg:ml-0">
                @if ($isOpen)
                    <img src='assets/icons/minus.svg' class="w-4 h-4 lg:w-auto lg:h-auto cursor-pointer" />
                @else
                    <img src='assets/icons/plus.svg' class="w-4 h-4 lg:w-auto lg:h-auto cursor-pointer" />
                @endif
            </div>
        </div>

        {{-- Answer (only when open) --}}
        @if ($isOpen)
            <div class="mt-3 lg:mt-4">
                <p
                    class="
               font-[300] text-[16px] lg:text-[18px]
               leading-[140%] lg:leading-[100%]
               text-right
               text-[#95999BD9]
               p-1 lg:p-2">
                    {{ $answer }}
                </p>
            </div>
        @endif
    </div>

    @once
        @push('styles')
            <style>
                .number-circle {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    width: 20px;
                    height: 30px;
                    color: transparent;
                    -webkit-text-stroke: 0.8px #84B156;
                    text-stroke: 0.8px #84B156;
                    font-family: 'Mooli', sans-serif;
                    font-weight: 400;
                    font-size: 16px;
                    line-height: 30px;
                    text-align: center;
                }

                @media (min-width: 1024px) {
                    .number-circle {
                        width: 25px;
                        height: 38px;
                        font-size: 20px;
                        line-height: 38px;
                    }
                }
            </style>
        @endpush
    @endonce
