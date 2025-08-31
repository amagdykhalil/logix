@php
    $loginActive = Route::currentRouteName() === 'login';
    $shouldShowAuthToggle = in_array(Route::currentRouteName(), ['login', 'signup']);
@endphp

@if ($shouldShowAuthToggle)
    <div
        class="w-fit mx-auto h-[59px] rounded-[33px] relative flex items-center justify-center gap-3 bg-[#84B1561A] p-5 mb-8 lg:mb-14">

        {{-- Login Button --}}

        <a href="{{ url('/login') }}"
            class="w-[146px] h-[40px] rounded-[33px] cursor-pointer
           text-sm font-medium transition-colors flex-center
           {{ $loginActive ? 'bg-primary-soft hover:bg-primary-softDark text-white' : ' text-[#84B156] hover:bg-gray-100' }}">
            تسجيل دخول
        </a>



        {{-- Signup Button --}}
        <a href="{{ url('/signup') }}"
            class="w-[146px] h-[40px] rounded-[33px] cursor-pointer
           text-sm font-medium transition-colors flex-center
           {{ !$loginActive ? 'bg-primary-soft hover:bg-primary-softDark text-white' : ' text-[#84B156] hover:bg-gray-100' }}">
            حساب جديد
        </a>


    </div>
@else
    <div class="w-fit mx-auto h-[59px]">
    </div>
@endif
