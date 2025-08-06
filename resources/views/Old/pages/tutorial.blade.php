@extends('layouts.app')
@php
    $cards = [
        ['image' => 'assets/test/1.jpg', 'title' => 'كيفية تحميل النظام'],
        ['image' => 'assets/test/2.jpg', 'title' => 'كيفية تحميل النظام'],
        ['image' => 'assets/test/3.jpg', 'title' => 'كيفية تحميل النظام'],
        ['image' => 'assets/test/4.jpg', 'title' => 'كيفية تحميل النظام'],
        ['image' => 'assets/test/5.jpg', 'title' => 'كيفية تحميل النظام'],
        ['image' => 'assets/test/6.jpg', 'title' => 'كيفية تحميل النظام'],
        ['image' => 'assets/test/1.jpg', 'title' => 'كيفية تحميل النظام'],
        ['image' => 'assets/test/2.jpg', 'title' => 'كيفية تحميل النظام'],
        ['image' => 'assets/test/3.jpg', 'title' => 'كيفية تحميل النظام'],
    ];
@endphp


@section('content')
    <!-- Header -->
    <div class="card !pb-12 ">
        <div class="flex max-sm:flex-wrap max-sm:justify-center gap-2 items-center justify-between">
            <div class="w-fit">
                <h2 class="mb-2 flex items-center gap-1 text-sm font-bold mt-1 text-primary-text dark:text-gray-200">
                    <img class="w-5 h-5 dark:invert" src="{{ asset('assets/icons/square.svg') }}" />
                    <span class="-mb-[1px]">تعلم النظام معانا </span>
                </h2>
                <h3  class="text-xs text-gray-500 dark:text-gray-400"> تعرف علي جميع مصادر
                    التعلم الخاصة بنا الان</h3>
            </div>

            <button
                class=" flex flex-none gap-2 items-center text-sm py-2 bg-[#4e4ba0] hover:opacity-80 duration-300 text-white px-3 rounded-lg transition
                               dark:bg-[#374151] dark:hover:bg-gray-600">
                <img src="{{ asset('assets/icons/apk.svg') }}" class="w-5 h-5" />
                <span> حمل التطبيق من هنا</span>
            </button>
        </div>


        <div class="grid  gap-8 mt-16 max-sm:!grid-cols-1 " style="grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));">


            @foreach ($cards as $card)
                <div class="relative rounded-2xl overflow-hidden group shadow-lg  cursor-pointer ">
                    <!-- الصورة -->
                    <img src="{{ asset($card['image']) }}" class="w-full group-hover:scale-[1.2] group-hover:rotate-[1deg] duration-300 max-sm:!h-fit !h-[300px] !object-cover" />

                    <!-- العنوان في الأسفل فوق الصورة -->
                    <div class="absolute !bottom-0 left-0 w-full bg-[#0000004D] backdrop-blur-[4px] px-4 py-2">
                        <h3 class="text-white text-center text-base font-bold">{{ $card['title'] }}</h3>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
