@extends('layouts.app')

@php

    $datatableSettings = [
        'order' => [[0, 'desc']],
        'buttons' => ['excel'],
        'paging' => true,
        'searching' => false,
        'info' => false,
        'limit' => 7,
    ];
@endphp

@section('content')
    <!-- Header -->
    <div class="card">
        <div class="flex items-center justify-between">
            <div class="w-fit">
                <h2 class="mb-2 flex items-center gap-1 text-sm font-bold mt-1 text-primary-text dark:text-gray-200">
                    <img class="w-5 h-5 dark:invert" src="{{ asset('assets/icons/square.svg') }}" />
                    <span class="-mb-[1px]">الاشتراكات </span>
                </h2>
                <h3 class="tab-all" data-tab-content class="text-xs text-gray-500 dark:text-gray-400"> تعرف علي جميع المدفوعات
                    و الاشتراكات الخاص بك</h3>
                <h3 class="tab-prev-subscriptions" data-tab-content
                    class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-2 tracking-wide "> عدد المستخدمين
                    <span class="  bg-gray-100 text-gray-800 p-2 rounded-full ">5/12</span>
                </h3>
            </div>


            <div class="flex-1 flex items-center justify-end w-full">
                <div class="tab-prev-subscriptions" data-tab-content>
                    <div class="flex gap-2">
                        <a href="{{route('package-customization')}}"
                            class="flex-none flex gap-2 items-center text-sm py-2 bg-[#4e4ba0] hover:opacity-80 duration-300 text-white px-3 rounded-lg transition dark:bg-[#374151] dark:hover:bg-gray-600">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_890_2319)">
                                    <path
                                        d="M4.125 2.25V6M6 4.125H2.25M6 12L4.5 13.5M4.5 13.5L3 15M4.5 13.5L6 15M4.5 13.5L3 12M15 4.5H12M15 13.875H12M15 11.625H12M16.5 9H1.5M9 16.5V1.5"
                                        stroke="white" stroke-width="1.125" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_890_2319">
                                        <rect width="18" height="18" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span> تخصيص باقتك</span>
                        </a>
                        <button onclick="toggleBuy()"
                            class="flex-none flex gap-2 items-center text-sm py-2 bg-[#E59C3B] hover:bg-[#E58C0B] duration-300 text-white px-3 rounded-lg transition  ">
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.5 7.5C11.1569 7.5 12.5 6.15685 12.5 4.5C12.5 2.84315 11.1569 1.5 9.5 1.5C7.84315 1.5 6.5 2.84315 6.5 4.5C6.5 6.15685 7.84315 7.5 9.5 7.5Z"
                                    stroke="white" stroke-width="1.125" />
                                <path
                                    d="M15.4985 13.5C15.4995 13.377 15.5 13.252 15.5 13.125C15.5 11.2613 12.8135 9.75 9.5 9.75C6.1865 9.75 3.5 11.2613 3.5 13.125C3.5 14.9887 3.5 16.5 9.5 16.5C11.1732 16.5 12.38 16.3822 13.25 16.1722"
                                    stroke="white" stroke-width="1.125" stroke-linecap="round" />
                            </svg>
                            <span>أشتري مستخدم</span>
                        </button>
                    </div>
                </div>

                <div class="tab-all" data-tab-content>
                    <button id="customExcelBtn"
                        class=" flex flex-none gap-2 items-center text-sm py-2 bg-[#4e4ba0] hover:opacity-80 duration-300 text-white px-3 rounded-lg transition
                               dark:bg-[#374151] dark:hover:bg-gray-600">
                        <img src="{{ asset('assets/icons/apk.svg') }}" class="w-5 h-5" />
                        <span>تصدير الملف</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Tab Buttons -->
        <div class="border-b-[2px] border-b-[#F9F9FB] dark:border-b-gray-700 flex space-x-4 rtl:space-x-reverse mt-6"
            id="tab-buttons">
            <button data-tab="all"
                class="tab-btn -mb-[2px] !pb-[18px] text-sm tab-inactive flex items-center gap-2 py-1 focus:outline-none
                       hover:text-[#434093] dark:hover:text-indigo-300 transition-colors">
                المدفوعات السابقة
                <span class="count">12</span>
            </button>

            <button data-tab="prev-subscriptions"
                class="tab-btn -mb-[2px] !pb-[18px] text-sm tab-inactive flex items-center gap-2 py-1 focus:outline-none
                       hover:text-[#434093] dark:hover:text-indigo-300 transition-colors">
                باقات الاشتراك
            </button>

        </div>

        <!-- Tab Content -->
        <div class="mt-16 !pb-16">
            <div id="tab-prev-subscriptions" class="!flex-col flex" data-tab-content>
                <div class="relative z-10 flex flex-wrap gap-4">
                    <!-- Left Section (50 ر.س) - Current Plan -->
                    <div
                        class="max-w-[280px] w-full bg-gradient-to-t to-[#434093] from-[#2A285E] dark:to-[#2e2b6d] dark:from-[#1e1d4d] p-6 rounded-3xl text-white space-y-4 relative">
                        <div
                            class="absolute top-10 rtl:-left-2 ltr:-right-2 bg-[#E59C3B8C] dark:bg-[#E59C3B66] border border-dashed border-[#E9A760] text-[#E59C3B] dark:text-[#F0B04D] px-3 py-1 ltr:rounded-[5px_0_0_5px] rtl:rounded-[0_5px_5px_0] text-sm">
                            باقتك الحالية
                        </div>
                        <div class="absolute scale-[1.5] top-[55px] rtl:-left-[7px] ltr:-right-[7px]">
                            <svg class="ltr:scale-x-[-1]" width="6" height="6" viewBox="0 0 6 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 6V0H0L6 6Z" fill="#CE8625" />
                            </svg>
                        </div>

                        <h2 class="flex !mt-0 items-center gap-2 text-3xl font-bold">
                            50 <img src="assets/icons/currency.svg"  />
                        </h2>
                        <h3 class="text-[25px]">أساسية</h3>

                        @php
                            $features = [
                                'عدد المستخدمين حاليا 10',
                                'متبقي للاستخدام 4',
                                'تتبع مكالمات الواتساب',
                                'التقارير والتحليلات',
                                'لوحة تحكم ذكية',
                            ];
                        @endphp

                        <ul class="space-y-3">
                            @foreach ($features as $feature)
                                <li class="flex gap-2 items-center text-sm">
                                    <img src="assets/icons/check.svg" class=" " />
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>

                        <button
                            class="w-full py-2 !mt-8 hover:bg-opacity-90 duration-300 bg-white rounded-full text-[#434093] dark:text-[#2e2b6d] font-[700]">
                            إلغاء الاشتراك
                        </button>
                    </div>

                    <!-- Right Section (50 ر.س) - New Plan -->
                    <div
                        class="max-w-[280px] w-full bg-gradient-to-t to-gray-100 from-gray-200 dark:to-gray-800 dark:from-gray-700 p-6 rounded-3xl text-gray-800 dark:text-gray-200 space-y-4 relative">
                        <h2 class="flex items-center gap-2 text-3xl font-bold">
                            50 <img src="assets/icons/currency.svg" class="invert dark:invert-0" />
                        </h2>
                        <h3 class="text-[25px]">أساسية</h3>

                        @php
                            $features = [
                                'تكفي أكثر 18 مستخدم',
                                'تسجيل المكالمات ومراقبتها',
                                'تتبع مكالمات الواتساب',
                                'التقارير والتحليلات',
                            ];
                        @endphp

                        <ul class="space-y-3">
                            @foreach ($features as $feature)
                                <li class="flex gap-2 items-center text-sm">
                                    <img src="assets/icons/check.svg" class="invert dark:invert-0" />
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>

                        <button
                            class="w-full py-2 !mt-8 z-10 duration-300 !bg-gradient-to-l text-white from-[#B4AEF0] to-[#E9A861] dark:from-[#7A72C4] dark:to-[#D9984E] rounded-full font-[700]">
                            أشترك الان
                        </button>
                    </div>
                </div>


            </div>
            <div id="tab-all" data-tab-content>
                <x-subscriptions.tab-prev-subscriptions />
            </div>
        </div>
    </div>


    {{-- sidebar of buy users --}}
{{-- sidebar of buy users  --}}
            <div id="overlay-buy" class="fixed inset-0 bg-[#00000047] dark:bg-[#00000080] backdrop-blur-[2px] z-40 hidden"
                onclick="toggleBuy()"></div>
            <div id="add-buy"
                class="h-screen -translate-x-full  overflow-y-auto overflow-x-hidden space-y-4 fixed px-8 py-4 top-0 left-0 w-[400px] bg-white dark:bg-gray-800 shadow-lg z-50 transition-transform duration-300 ease-in-out">
                <div class="w-[calc(100%+24px)] !-mr-3 flex justify-between items-center mb-8">
                    <h2 class="text-lg font-bold text-right text-indigo-950 dark:text-indigo-200"> أشتري مستخدمين</h2>
                    <button onclick="toggleBuy()"
                        class="text-gray-400 scale-[2] hover:text-red-500 dark:hover:text-red-400 text-xl">&times;</button>
                </div>

                <div class="select-group !mt-16">
                    <label class="select-label dark:text-gray-300">  عدد المستخدمين</label>
                    <select class="select-select ">
                        <option class="dark:bg-gray-700"> 5</option>
                        <option class="dark:bg-gray-700"> 15</option>
                        <option class="dark:bg-gray-700"> 25</option>
                    </select>
                </div>
                
                <div class=" !mt-6 flex items-center justify-between" >
                    <span class="text-sm dark:text-white text-[#1A1A1A] " >تكلفة الموظف الواحد</span>
                    <span class="text-sm dark:invert text-[#434093] " >7 $</span>
                </div>
                <div class=" !mt-6 flex items-center justify-between" >
                    <span class="text-sm dark:text-white text-[#1A1A1A] " >  المبلغ الكلي :</span>
                    <span class="text-sm dark:invert text-[#E9A760] " >200 $</span>
                </div>

                <!-- الأزرار -->
                <div class="flex gap-4 !mt-12">
                    <button class="flex-1 bg-[#434093] dark:bg-indigo-700 text-white rounded-md py-2">أشتري الان</button>
                </div>
            </div>
    <!-- JS Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('[data-tab-content]');

            function activateTab(tabName) {
                // 1. Handle button states
                buttons.forEach(btn => {
                    btn.classList.remove('tab-active');
                    btn.classList.add('tab-inactive');
                });

                // Activate current button
                const activeBtn = document.querySelector(`[data-tab="${tabName}"]`);
                if (activeBtn) {
                    activeBtn.classList.add('tab-active');
                    activeBtn.classList.remove('tab-inactive');
                }

                // 2. Handle content visibility
                contents.forEach(content => {
                    // Hide all content elements first
                    content.style.display = 'none';
                    content.classList.remove('tab-content-active');

                    // Show only the active tab content
                    if (content.id === `tab-${tabName}`) {
                        content.style.display = 'block';
                        content.classList.add('tab-content-active');
                    }
                });

                // 3. Handle additional elements with tab-related classes
                const tabClasses = ['tab-all', 'tab-prev-subscriptions'];
                tabClasses.forEach(tabClass => {
                    document.querySelectorAll(`.${tabClass}`).forEach(el => {
                        // Hide all elements with tab classes
                        el.style.display = 'none';

                        // Show only elements that match the active tab
                        if (tabClass === `tab-${tabName}`) {
                            el.style.display = 'block';
                        }
                    });
                });
            }

            // Default tab
            activateTab('all');

            // Add click events
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const tab = button.getAttribute('data-tab');
                    activateTab(tab);
                });
            });
        });
    </script>
    
    <script>
        function toggleBuy() {
            const sidebar = document.getElementById('add-buy');
            const overlay = document.getElementById('overlay-buy');

            const isOpen = !sidebar.classList.contains('-translate-x-full');

            if (isOpen) {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            } else {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            }
        }
    </script>
@endsection
