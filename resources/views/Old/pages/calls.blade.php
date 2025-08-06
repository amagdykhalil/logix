@extends('layouts.app')

@php

    $headers = [
        ['key' => 'employee_name', 'label' => 'اسم الموظف'],
        ['key' => 'total_calls', 'label' => 'إجمالي المكالمات'],
        ['key' => 'answered_calls', 'label' => 'مكالمات تم الرد'],
        ['key' => 'unanswered_calls', 'label' => 'مكالمات لم يتم الرد'],
        ['key' => 'exclusive_calls', 'label' => 'المكالمات الحصريه'],
        ['key' => 'exclusive_answered', 'label' => 'المكالمات الحصريه تم الرد'],
        ['key' => 'call_duration', 'label' => 'مدة المكالمات'],
    ];

    $orders = [
        (object) [
            'employee_name' => 'يسرا علام',
            'total_calls' => '25',
            'answered_calls' => '18',
            'unanswered_calls' => '7',
            'exclusive_calls' => '5',
            'exclusive_answered' => '20',
            'call_duration' => '10 دقائق',
        ],
        (object) [
            'employee_name' => 'أحمد محمد',
            'total_calls' => '32',
            'answered_calls' => '25',
            'unanswered_calls' => '7',
            'exclusive_calls' => '8',
            'exclusive_answered' => '24',
            'call_duration' => '15 دقائق',
        ],
        (object) [
            'employee_name' => 'سارة عبدالله',
            'total_calls' => '28',
            'answered_calls' => '22',
            'unanswered_calls' => '6',
            'exclusive_calls' => '6',
            'exclusive_answered' => '22',
            'call_duration' => '12 دقائق',
        ],
        (object) [
            'employee_name' => 'خالد سعيد',
            'total_calls' => '35',
            'answered_calls' => '30',
            'unanswered_calls' => '5',
            'exclusive_calls' => '10',
            'exclusive_answered' => '25',
            'call_duration' => '18 دقائق',
        ],
        (object) [
            'employee_name' => 'نورا فهد',
            'total_calls' => '20',
            'answered_calls' => '15',
            'unanswered_calls' => '5',
            'exclusive_calls' => '4',
            'exclusive_answered' => '16',
            'call_duration' => '8 دقائق',
        ],
        (object) [
            'employee_name' => 'عمر راشد',
            'total_calls' => '40',
            'answered_calls' => '35',
            'unanswered_calls' => '5',
            'exclusive_calls' => '12',
            'exclusive_answered' => '28',
            'call_duration' => '22 دقائق',
        ],
        (object) [
            'employee_name' => 'لمى علي',
            'total_calls' => '18',
            'answered_calls' => '12',
            'unanswered_calls' => '6',
            'exclusive_calls' => '3',
            'exclusive_answered' => '15',
            'call_duration' => '7 دقائق',
        ],
        (object) [
            'employee_name' => 'فيصل ناصر',
            'total_calls' => '30',
            'answered_calls' => '25',
            'unanswered_calls' => '5',
            'exclusive_calls' => '7',
            'exclusive_answered' => '23',
            'call_duration' => '14 دقائق',
        ],
        (object) [
            'employee_name' => 'هند سليمان',
            'total_calls' => '22',
            'answered_calls' => '18',
            'unanswered_calls' => '4',
            'exclusive_calls' => '5',
            'exclusive_answered' => '17',
            'call_duration' => '9 دقائق',
        ],
        (object) [
            'employee_name' => 'وليد كمال',
            'total_calls' => '38',
            'answered_calls' => '32',
            'unanswered_calls' => '6',
            'exclusive_calls' => '11',
            'exclusive_answered' => '27',
            'call_duration' => '20 دقائق',
        ],
        (object) [
            'employee_name' => 'ريم عبدالرحمن',
            'total_calls' => '27',
            'answered_calls' => '20',
            'unanswered_calls' => '7',
            'exclusive_calls' => '6',
            'exclusive_answered' => '21',
            'call_duration' => '11 دقائق',
        ],
        (object) [
            'employee_name' => 'بدر حمد',
            'total_calls' => '33',
            'answered_calls' => '28',
            'unanswered_calls' => '5',
            'exclusive_calls' => '9',
            'exclusive_answered' => '24',
            'call_duration' => '16 دقائق',
        ],
        (object) [
            'employee_name' => 'أروى سعد',
            'total_calls' => '19',
            'answered_calls' => '14',
            'unanswered_calls' => '5',
            'exclusive_calls' => '4',
            'exclusive_answered' => '15',
            'call_duration' => '8 دقائق',
        ],
        (object) [
            'employee_name' => 'تركي فيصل',
            'total_calls' => '42',
            'answered_calls' => '38',
            'unanswered_calls' => '4',
            'exclusive_calls' => '13',
            'exclusive_answered' => '29',
            'call_duration' => '25 دقائق',
        ],
    ];

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
            <div class="w-full">
                <h2 class="mb-2 flex items-center gap-1 text-sm font-bold mt-1 text-primary-text dark:text-gray-200">
                    <img class="w-5 h-5 dark:invert" src="{{ asset('assets/icons/square.svg') }}" />
                    <span class="-mb-[1px]">   سجل المكالمات</span>
                </h2>
                <h3 class="text-xs text-gray-500 dark:text-gray-400">استعرض جميع مكالماتك بسهولة وفي أي وقت</h3>
            </div>

            <button id="customExcelBtn"  
                class="flex-none flex gap-2 items-center text-sm py-2 bg-[#4e4ba0] hover:opacity-80 duration-300 text-white px-3 rounded-lg transition
                       dark:bg-[#374151] dark:hover:bg-gray-600">
                <img src="{{ asset('assets/icons/apk.svg') }}" class="w-5 h-5" />
                <span>تصدير التقرير</span>
            </button>
        </div>

        <!-- Tab Buttons -->
        <div class="border-b-[2px] border-b-[#F9F9FB] dark:border-b-gray-700 flex space-x-4 rtl:space-x-reverse mt-6" id="tab-buttons">
            <button data-tab="all"
                class="tab-btn -mb-[2px] !pb-[18px] text-sm tab-inactive flex items-center gap-2 py-1 focus:outline-none
                       hover:text-[#434093] dark:hover:text-indigo-300 transition-colors">
                جميع المكالمات
                <span class="count">27</span>
            </button>

            <button data-tab="incoming"
                class="tab-btn -mb-[2px] !pb-[18px] text-sm tab-inactive flex items-center gap-2 py-1 focus:outline-none
                       hover:text-[#434093] dark:hover:text-indigo-300 transition-colors">
                المكالمات الواردة
                <span class="count">12</span>
            </button>

            <button data-tab="outgoing"
                class="tab-btn -mb-[2px] !pb-[18px] text-sm tab-inactive flex items-center gap-2 py-1 focus:outline-none
                       hover:text-[#434093] dark:hover:text-indigo-300 transition-colors">
                المكالمات الصادرة
                <span class="count">12</span>
            </button>
        </div>

        <!-- Tab Content -->
        <div class="mt-16">
            <div id="tab-incoming" data-tab-content>
                <x-calls.tab-incoming />
            </div>
            <div id="tab-outgoing" data-tab-content>
                <x-calls.tab-outgoing />
            </div>
            <div id="tab-all" data-tab-content>
                <x-calls.tab-all />
            </div>
        </div>
    </div>

    <!-- JS Logic -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('[data-tab-content]');

            function activateTab(tabName) {
                // Remove all active styles and hide contents
                buttons.forEach(btn => {
                    btn.classList.remove('tab-active');
                    btn.classList.add('tab-inactive');
                });

                contents.forEach(content => {
                    content.classList.remove('tab-content-active');
                });

                // Add active styles and show selected content
                const activeBtn = document.querySelector(`[data-tab="${tabName}"]`);
                const activeContent = document.getElementById(`tab-${tabName}`);

                if (activeBtn) {
                    activeBtn.classList.add('tab-active');
                    activeBtn.classList.remove('tab-inactive');
                }

                if (activeContent) {
                    activeContent.classList.add('tab-content-active');
                }
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
    @endpush
@endsection
