    @props([
        'number', // integer
        'question', // string (Arabic)
        'answer', // string (Arabic)
    ])

    <div
        class="ques w-full lg:w-[748px]
         bg-[#F9F9F9]
         border-[0.8px] border-[#ECECEC]
         rounded-[8px]
         opacity-100
         relative
         p-4 lg:p-[20px]">
        {{-- Right dashed line - Hidden on mobile --}}
        <div class="answer absolute top-[23px] right-0 h-[60px] w-[4px] bg-primary-soft rounded-[5px] z-[1]">
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

            <button class="toggle flex-shrink-0 ml-2 lg:ml-0 w-5 h-5">
                <img src='assets/icons/minus.svg' class="minus w-4 h-4 lg:w-auto lg:h-auto cursor-pointer" />
                <img src='assets/icons/plus.svg' class="plus w-4 h-4 lg:w-auto lg:h-auto cursor-pointer" />
            </button>
        </div>

        <div id="answer" class="answer">
            <p class="text-right text-[13px] text-[#95999BD9] p-1 lg:p-2 font-[300]">
                {{ $answer }}
            </p>
        </div>
    </div>

    @once
        @push('styles')
            <style>
                .ques .minus {
                    display: none;
                }

                .ques .plus {
                    display: block;
                }

                .ques.open .minus {
                    display: block;
                }

                .ques.open .plus {
                    display: none;
                }


                /* Default (hidden) state */
                .ques .answer {
                    max-height: 0;
                    overflow: hidden;
                    opacity: 0;
                    visibility: hidden;
                    transition: all 0.3s ease;
                }

                /* When open class is present on .ques */
                .ques.open .answer {
                    max-height: 200px;
                    /* or whatever height fits your content */
                    opacity: 1;
                    visibility: visible;
                }


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


        @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const toggleButtons = document.querySelectorAll('.toggle');

                    toggleButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            const currentQues = button.closest('.ques');

                            // Toggle current
                            currentQues.classList.toggle('open');
                        });
                    });
                });
            </script>
        @endpush

    @endonce
