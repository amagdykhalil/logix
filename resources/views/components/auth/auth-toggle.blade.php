@props(['login' => false])

<div class="w-[329px] h-[59px] rounded-[33px] relative flex items-center justify-between bg-white">

    {{-- Login Button --}}
    <button
        class="w-[146px] h-[40px] rounded-[33px]
           absolute top-[9px] left-[27px]
           text-sm font-medium
           {{ $login ? 'bg-[#84B156] text-white' : 'bg-white text-[#84B156] border border-[#84B156]' }}">
        تسجيل دخول
    </button>

    {{-- Signup Button --}}
    <button
        class="w-[146px] h-[40px] rounded-[33px]
           absolute top-[9px] left-[156px]
           text-sm font-medium
           {{ !$login ? 'bg-[#84B156] text-white' : 'bg-white text-[#84B156] border border-[#84B156]' }}">
        حساب جديد
    </button>

</div>
