{{-- resources/views/components/landing/logix-cod-card.blade.php --}}
@props(['video', 'likes' => '7,888', 'shares' => '43', 'comments' => '500', 'saves' => '16'])

<div data-aos="zoom-in"
    class="w-full sm:w-[388px]
            bg-white rounded-[15px]
            overflow-hidden flex flex-col items-center
            p-4 sm:p-[20px]">

    {{-- Top image (blue part) --}}
    <div class="relative w-full sm:w-[345px]">
        <div class="flex justify-between items-center
                mb-4 sm:mb-[22px]">
            <button class='flex flex-col gap-[5px]'>
                <div class='w-3 h-3 rounded-full bg-gray-300'></div>
                <div class='w-3 h-3 rounded-full bg-gray-300'></div>
                <div class='w-3 h-3 rounded-full bg-gray-300'></div>
            </button>

            <div class="flex justify-end items-center">
                <p
                    class="text-lg sm:text-[20px]
                   text-black font-[500]
                   ml-3 sm:ml-[20px]">
                    Logix COD
                </p>
                <img src="assets/icons/logo-white.png" alt="Logix Logo"
                    class="w-10 h-10 sm:w-14 sm:h-14
                    border-2 border-primary-soft
                    rounded-full" />
            </div>
        </div>

        <video controls class="w-full h-auto sm:h-[417px] object-fill rounded-[3px]">
            <source src="{{ $video }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>

    {{-- Metrics --}}
    <div
        class="mt-3 sm:mt-[7px]
              w-full px-4 sm:px-6
              flex flex-wrap sm:flex-nowrap
              justify-between
              text-black text-sm">
        <div
            class="flex items-center
                space-x-1 sm:space-x-2
                rtl:space-x-reverse
                sm:w-20">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="14" viewBox="0 0 10 14" fill="none">
                <path
                    d="M0.583313 3.39167C0.583313 2.59833 0.583313 2.20167 0.73773 1.8985C0.873548 1.63195 1.09026 1.41524 1.35681 1.27942C1.65998 1.125 2.05665 1.125 2.84998 1.125H6.81665C7.60998 1.125 8.00665 1.125 8.30981 1.27942C8.57636 1.41524 8.79308 1.63195 8.9289 1.8985C9.08331 2.20167 9.08331 2.59833 9.08331 3.39167V12.816C9.08331 13.1603 9.08331 13.3324 9.01177 13.4266C8.98086 13.4676 8.94141 13.5014 8.89615 13.5256C8.8509 13.5498 8.80093 13.5639 8.74969 13.5669C8.6314 13.574 8.48831 13.4783 8.20215 13.2878L4.83331 11.0417L1.46448 13.2871C1.17831 13.4783 1.03523 13.574 0.916229 13.5669C0.865113 13.5638 0.815276 13.5496 0.770152 13.5254C0.725028 13.5012 0.685692 13.4675 0.654855 13.4266C0.583313 13.3324 0.583313 13.1603 0.583313 12.816V3.39167Z"
                    stroke="black" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <div class="flex items-center
                space-x-1 sm:space-x-2
                rtl:space-x-reverse">
            <span>{{ $likes }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                <path
                    d="M13.0208 0.479004L0.979156 4.37484L5.58332 6.49984L10.5417 2.95817L6.99999 7.9165L9.12499 12.5207L13.0208 0.479004Z"
                    stroke="black" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <div class="flex items-center
                space-x-1 sm:space-x-2
                rtl:space-x-reverse">
            <span>{{ $shares }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="15" viewBox="0 0 13 15" fill="none">
                <path
                    d="M10.0417 11.0415H2.95833V8.9165L0.125 11.7498L2.95833 14.5832V12.4582H11.4583V8.20817H10.0417M2.95833 3.95817H10.0417V6.08317L12.875 3.24984L10.0417 0.416504V2.5415H1.54167V6.7915H2.95833V3.95817Z"
                    fill="black" />
            </svg>
        </div>

        <div class="flex items-center
                space-x-1 sm:space-x-2
                rtl:space-x-reverse">
            <span>{{ $comments }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                <path
                    d="M13.375 7.5C13.375 6.23914 13.0011 5.0066 12.3006 3.95824C11.6001 2.90988 10.6045 2.09278 9.43962 1.61027C8.27475 1.12776 6.99295 1.00151 5.75632 1.24749C4.51969 1.49348 3.38377 2.10064 2.49221 2.9922C1.60065 3.88376 0.993493 5.01967 0.747512 6.2563C0.501531 7.49293 0.627777 8.77473 1.11029 9.93961C1.59279 11.1045 2.40989 12.1001 3.45826 12.8006C4.50662 13.5011 5.73916 13.875 7.00002 13.875C8.05402 13.875 9.0471 13.62 9.92331 13.1667L13.375 13.875L12.6667 10.4233C13.1193 9.54779 13.375 8.55329 13.375 7.5Z"
                    stroke="black" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>

        <div class="flex items-center
                space-x-1 sm:space-x-2
                rtl:space-x-reverse">
            <span>{{ $saves }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1.21301 1.09262C1.87717 0.428656 2.77785 0.0556641 3.71697 0.0556641C4.6561 0.0556641 5.55677 0.428656 6.22093 1.09262C6.35079 1.222 6.51796 1.38303 6.72243 1.5757C6.92643 1.38303 7.09336 1.222 7.22322 1.09262C7.8846 0.434342 8.77904 0.0636798 9.71218 0.0611807C10.6453 0.0586816 11.5417 0.424548 12.2066 1.07927C12.8715 1.73399 13.2512 2.62466 13.263 3.55772C13.2749 4.49078 12.9181 5.39084 12.2701 6.06228L7.22251 11.1099C7.08968 11.2427 6.90955 11.3173 6.72172 11.3173C6.5339 11.3173 6.35376 11.2427 6.22093 11.1099L1.17335 6.06299C0.525959 5.39532 0.167167 4.49979 0.174456 3.56982C0.181745 2.63985 0.555239 1.75006 1.21301 1.09262Z"
                    fill="#84B156" />
            </svg>
        </div>
    </div>
</div>
