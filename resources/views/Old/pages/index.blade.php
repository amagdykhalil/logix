@php

    $cards = [
        [
            'title' => 'عدد الموظفين',
            'value' => 20,
            'icon' => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="#0CC763"/>
                    <path d="M15.875 23C18.5674 23 20.75 20.8174 20.75 18.125C20.75 15.4326 18.5674 13.25 15.875 13.25C13.1826 13.25 11 15.4326 11 18.125C11 20.8174 13.1826 23 15.875 23Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.95898 26.75C9.70813 25.5982 10.7331 24.6517 11.9409 23.9965C13.1486 23.3412 14.5009 22.998 15.8749 22.998C17.249 22.998 18.6012 23.3412 19.809 23.9965C21.0167 24.6517 22.0417 25.5982 22.7909 26.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24.125 23C25.499 22.9992 26.8513 23.3418 28.0592 23.9967C29.267 24.6517 30.292 25.5981 31.0409 26.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.3145 13.5969C22.9813 13.3309 23.6987 13.2155 24.4153 13.2589C25.1319 13.3023 25.8301 13.5035 26.46 13.8481C27.0899 14.1926 27.6359 14.672 28.059 15.252C28.4821 15.8321 28.7718 16.4984 28.9076 17.2034C29.0433 17.9084 29.0216 18.6346 28.8441 19.3303C28.6666 20.026 28.3376 20.6738 27.8807 21.2276C27.4238 21.7814 26.8502 22.2274 26.2009 22.5338C25.5516 22.8402 24.8427 22.9994 24.1248 23" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    ',
        ],
        [
            'title' => 'متوسط المكالمة',
            'value' => 30 . ' د',
            'icon' => '<svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="40" height="40" rx="20" fill="#519ED1"/>
                <path d="M20.5 29.5C19.3947 29.5 18.357 29.2913 17.387 28.874C16.417 28.4567 15.5687 27.8847 14.842 27.158C14.1153 26.4313 13.5433 25.5827 13.126 24.612C12.7087 23.6413 12.5 22.604 12.5 21.5H13.5C13.5 23.4333 14.1833 25.0833 15.55 26.45C16.9167 27.8167 18.5667 28.5 20.5 28.5C22.4333 28.5 24.0833 27.8167 25.45 26.45C26.8167 25.0833 27.5 23.4333 27.5 21.5H28.5C28.5 22.6053 28.2913 23.643 27.874 24.613C27.4567 25.583 26.8847 26.4313 26.158 27.158C25.4313 27.8847 24.5827 28.4567 23.612 28.874C22.6413 29.2913 21.604 29.5 20.5 29.5ZM12.5 21.5C12.5 20.3947 12.7087 19.357 13.126 18.387C13.5433 17.417 14.1153 16.5687 14.842 15.842C15.5687 15.1153 16.4173 14.5433 17.388 14.126C18.3587 13.7087 19.396 13.5 20.5 13.5C21.4693 13.5 22.4067 13.6733 23.312 14.02C24.2173 14.3667 25.048 14.8563 25.804 15.489L26.896 14.396L27.604 15.104L26.512 16.196C27.1453 16.9527 27.635 17.7837 27.981 18.689C28.327 19.5943 28.5 20.5313 28.5 21.5H27.5C27.5 19.5667 26.8167 17.9167 25.45 16.55C24.0833 15.1833 22.4333 14.5 20.5 14.5C18.5667 14.5 16.9167 15.1833 15.55 16.55C14.1833 17.9167 13.5 19.5667 13.5 21.5H12.5ZM17.885 11V10H23.115V11H17.885ZM20.5 14.5C18.656 14.5 17.0617 15.1263 15.717 16.379C14.3723 17.6317 13.639 19.172 13.517 21H16.817L18.483 24.304L22.5 16.5L24.812 21H27.482C27.3607 19.172 26.6273 17.6317 25.282 16.379C23.9387 15.1263 22.3447 14.5 20.5 14.5ZM20.5 28.5C22.344 28.5 23.9383 27.8737 25.283 26.621C26.6277 25.3683 27.361 23.828 27.483 22H24.183L22.517 18.696L18.5 26.5L16.189 22H13.516C13.638 23.828 14.3713 25.3683 15.716 26.621C17.0607 27.8737 18.6553 28.5 20.5 28.5ZM20.5 28.5C18.5667 28.5 16.9167 27.8167 15.55 26.45C14.1833 25.0833 13.5 23.4333 13.5 21.5C13.5 19.5667 14.1833 17.9167 15.55 16.55C16.9167 15.1833 18.5667 14.5 20.5 14.5C22.4333 14.5 24.0833 15.1833 25.45 16.55C26.8167 17.9167 27.5 19.5667 27.5 21.5C27.5 23.4333 26.8167 25.0833 25.45 26.45C24.0833 27.8167 22.4333 28.5 20.5 28.5Z" fill="white"/>
                </svg>
                ',
        ],
        [
            'title' => 'مدة المكالمات',
            'value' => '8:30' . ' س.د',
            'icon' => '<svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="0.5" width="40" height="40" rx="20" fill="#E59C3B"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6 20.003L24.491 23.894L23.643 24.743L19.4 20.5V14.5H20.6V20.003ZM20 30.5C14.477 30.5 10 26.023 10 20.5C10 14.977 14.477 10.5 20 10.5C25.523 10.5 30 14.977 30 20.5C30 26.023 25.523 30.5 20 30.5ZM20 29.3C22.3339 29.3 24.5722 28.3729 26.2225 26.7225C27.8729 25.0722 28.8 22.8339 28.8 20.5C28.8 18.1661 27.8729 15.9278 26.2225 14.2775C24.5722 12.6271 22.3339 11.7 20 11.7C17.6661 11.7 15.4278 12.6271 13.7775 14.2775C12.1271 15.9278 11.2 18.1661 11.2 20.5C11.2 22.8339 12.1271 25.0722 13.7775 26.7225C15.4278 28.3729 17.6661 29.3 20 29.3Z" fill="white"/>
                </svg>
                ',
        ],
        [
            'title' => 'إجمالي المكالمات',
            'value' => 15,
            'icon' => '<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="40" height="40" rx="20" fill="#434093"/>
            <path d="M17.6586 13.712L17.2556 12.806C16.9926 12.214 16.8606 11.918 16.6636 11.691C16.4171 11.4067 16.0955 11.1977 15.7356 11.088C15.4486 11 15.1246 11 14.4756 11C13.5276 11 13.0536 11 12.6556 11.182C12.1646 11.4205 11.7845 11.8393 11.5946 12.351C11.4516 12.764 11.4926 13.189 11.5746 14.04C12.4479 23.09 17.4099 28.0517 26.4606 28.925C27.3106 29.007 27.7356 29.048 28.1496 28.905C28.6607 28.715 29.079 28.3354 29.3176 27.845C29.4996 27.446 29.4996 26.972 29.4996 26.024C29.4996 25.375 29.4996 25.051 29.4116 24.764C29.3018 24.4041 29.0928 24.0825 28.8086 23.836C28.5826 23.639 28.2856 23.508 27.6936 23.244L26.7876 22.842C26.1456 22.557 25.8256 22.414 25.4996 22.383C25.1874 22.353 24.8726 22.3969 24.5806 22.511C24.2756 22.63 24.0066 22.854 23.4666 23.304C22.9296 23.751 22.6616 23.974 22.3336 24.094C22.0187 24.2029 21.683 24.2374 21.3526 24.195C21.0066 24.145 20.7426 24.003 20.2126 23.72C18.5676 22.84 17.6596 21.933 16.7796 20.287C16.4966 19.757 16.3556 19.493 16.3046 19.147C16.262 18.817 16.2962 18.4816 16.4046 18.167C16.5246 17.838 16.7486 17.57 17.1956 17.033C17.6456 16.493 17.8706 16.224 17.9886 15.919C18.1026 15.627 18.1466 15.312 18.1166 15C18.0866 14.675 17.9436 14.354 17.6576 13.712" stroke="white" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            ',
        ],
    ];

    $data = [
        'call_report' => [
            'answered' => 85,
            'missed' => 15,
        ],
        'hourly_calls' => [
            '8 am' => 3,
            '9 am' => 2,
            '10 am' => 4,
            '11 am' => 6,
            '12 pm' => 12,
            '1 pm' => 4,
            '2 pm' => 5,
            '3 pm' => 2,
            '4 pm' => 1,
            '5 pm' => 6,
            '6 pm' => 5,
            '7 pm' => 9,
        ],
    ];

    $summary = [
        'outgoing' => 180,
        'incoming' => 85,
        'missed' => 35,
        'rejected' => 15,
        'exclusive' => 6,
    ];

    // Calculate total calls
    $summary['total'] = array_sum($summary);

    $calls = [
        [
            'description' => 'مكالمة صادرة ل يسرا علام',
            'number' => '01002766592',
            'time' => '12:45 Am',
            'dot_color' => 'bg-purple-500',
            'number_color' => 'text-purple-500',
        ],
        [
            'description' => 'مكالمة فائتة ل يسرا علام',
            'number' => '01002766592',
            'time' => '03:26 Pm',
            'dot_color' => 'bg-red-500',
            'number_color' => 'text-red-500',
        ],
        [
            'description' => 'مكالمة واردة ل يسرا علام',
            'number' => '01002766592',
            'time' => '08:52 Pm',
            'dot_color' => 'bg-green-500',
            'number_color' => 'text-green-500',
        ],
        [
            'description' => 'مكالمة صادرة ل يسرا علام',
            'number' => '01002766592',
            'time' => '02:54 Am',
            'dot_color' => 'bg-blue-500',
            'number_color' => 'text-blue-500',
        ],
        [
            'description' => 'مكالمة صادرة ل يسرا علام',
            'number' => '01002766592',
            'time' => '11:38 Am',
            'dot_color' => 'bg-orange-400',
            'number_color' => 'text-orange-400',
        ],
        [
            'description' => 'مكالمة مرفوضة ل يسرا علام',
            'number' => '01002766592',
            'time' => '01:42 Pm',
            'dot_color' => 'bg-red-600',
            'number_color' => 'text-purple-500',
        ],
    ];

    $callSummaryItems = [
        [
            'img' => 'assets/import-call.png',
            'title' => 'المكالمات الصادرة',
            'value' => $summary['outgoing'],
        ],
        [
            'img' => 'assets/export-call.png',
            'title' => 'المكالمات الواردة',
            'value' => $summary['incoming'],
        ],
        [
            'img' => 'assets/missing-call.png',
            'title' => 'المكالمات الفائتة',
            'value' => $summary['missed'],
        ],
        [
            'img' => 'assets/cancel-call.png',
            'title' => 'المكالمات المرفوضة',
            'value' => $summary['rejected'],
        ],
        [
            'img' => 'assets/exclusive-call.png',
            'title' => 'المكالمات الحصرية',
            'value' => $summary['exclusive'],
        ],
    ];

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

@push('styles')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .export-btn {
            padding: 8px 12px;
            background: #eee;
            border-radius: 8px;
            display: inline-block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #333;
        }

        .timeline {
            list-style: none;
            padding: 0;
        }

        .timeline li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            border-right: 4px solid transparent;
        }

        .timeline li .play-icon {
            margin-left: 10px;
            color: #4032a8;
        }

        .timeline li .text {
            flex: 1;
            font-size: 14px;
        }

        .timeline li .time {
            color: gray;
            font-size: 12px;
            min-width: 60px;
        }
    </style>
@endpush

@extends('layouts.app')

@section('content')
    <div x-data="{ activeFilter: 'اليوم' }"
        class=" w-full flex max-md:flex-col max-md:justify-center max-md:gap-4 items-center justify-between card mb-3 ">
        <!-- Header -->
        <div class=" w-full max-md:w-fit ">
            <h2 class=" mb-2 flex max-md:justify-center items-center gap-1 text-sm text-primary-text font-bold mt-1"><svg
                    width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.43 1.5H4.005C2.3625 1.5 1.5 2.3625 1.5 3.9975V5.4225C1.5 7.0575 2.3625 7.92 3.9975 7.92H5.4225C7.0575 7.92 7.92 7.0575 7.92 5.4225V3.9975C7.9275 2.3625 7.065 1.5 5.43 1.5Z"
                        fill="#8D8CAA" />
                    <path
                        d="M14.0026 1.5H12.5776C10.9426 1.5 10.0801 2.3625 10.0801 3.9975V5.4225C10.0801 7.0575 10.9426 7.92 12.5776 7.92H14.0026C15.6376 7.92 16.5001 7.0575 16.5001 5.4225V3.9975C16.5001 2.3625 15.6376 1.5 14.0026 1.5Z"
                        fill="#8D8CAA" />
                    <path
                        d="M14.0026 10.0725H12.5776C10.9426 10.0725 10.0801 10.935 10.0801 12.57V13.995C10.0801 15.63 10.9426 16.4925 12.5776 16.4925H14.0026C15.6376 16.4925 16.5001 15.63 16.5001 13.995V12.57C16.5001 10.935 15.6376 10.0725 14.0026 10.0725Z"
                        fill="#8D8CAA" />
                    <path
                        d="M5.43 10.0725H4.005C2.3625 10.0725 1.5 10.935 1.5 12.57V13.995C1.5 15.6375 2.3625 16.5 3.9975 16.5H5.4225C7.0575 16.5 7.92 15.6375 7.92 14.0025V12.5775C7.9275 10.935 7.065 10.0725 5.43 10.0725Z"
                        fill="#8D8CAA" />
                </svg>
                <span class="-mb-[3px]">الصفحة الرئيسية </span>
            </h2>
            <h1 class="text-xs max-md:text-center text-gray-500">استعرض جميع مكالماتك بسهولة وفي أي وقت</h1>
        </div>

        <!-- Filter Buttons -->
        <div class="flex gap-3 max-md:gap-1 max-md:justify-center  justify-end w-full">
            <template x-for="filter in ['اليوم', 'الاسبوع', 'الشهر', 'السنة']" :key="filter">
                <button @click="activeFilter = filter"
                    :class="{
                        'bg-primary-light text-primary-text border-primary-light': activeFilter === filter,
                        'bg-[#F9FBFC] text-[#A6ACBD] hover:bg-bg-soft hover:text-black/60 duration-300 border border-border ': activeFilter !==
                            filter
                    }"
                    class="px-3 max-md:p-1.5 max-md:text-xs  py-2 rounded-lg shadow-inner transition-all" x-text="filter">
                </button>
            </template>
        </div>
    </div>

    <div class="grid  lg:grid-cols-2 2xl:grid-cols-[1fr,1fr,400px] gap-3 mb-3">

        <div class="lg:col-span-2">
            {{-- Summary Cards --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 justify-center items-center max-sm:gap-1 gap-3 mb-3 ">
                @foreach ($cards as $card)
                    <div
                        class="card max-sm:!p-2 max-sm:flex-col max-sm:items-center flex items-start gap-2 max-w-full w-full">
                        <div class="text-right flex-1 max-sm:order-[2]">
                            <h3 class="max-sm:text-center text-sm text-gray-500">{{ $card['title'] }}</h3>
                            <p class="max-sm:text-center text-xl font-bold text-gray-800 mt-1">{{ $card['value'] }}</p>
                        </div>
                        {!! $card['icon'] !!}
                    </div>
                @endforeach
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[1fr,1fr,1fr] gap-3 ">
                <div class="card h-full lg:col-span-2 ">
                    <div class=" border-b border-b-border flex items-center justify-between pb-4 mb-6">
                        <h3 class="text-sm font-medium text-primary">إجمالي المكالمات حسب الساعة</h3>
                        <a href="#"
                            class=" text-nowrap flex items-center gap-1 text-primary-text text-sm bg-[#4340931A] px-3 py-1.5 rounded-lg hover:bg-primary-light duration-300 transition">
                            <svg class="stroke-primary-text " width="15" height="16" viewBox="0 0 15 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 7.375V11.125L6.875 9.875" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M5.625 11.125L4.375 9.875" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M13.75 6.75V9.875C13.75 13 12.5 14.25 9.375 14.25H5.625C2.5 14.25 1.25 13 1.25 9.875V6.125C1.25 3 2.5 1.75 5.625 1.75H8.75"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.75 6.75H11.25C9.375 6.75 8.75 6.125 8.75 4.25V1.75L13.75 6.75Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class=" ">تصدير التقرير</span>
                        </a>
                    </div>
                    <canvas id="hourlyCallsChart"></canvas>
                </div>
                <div class="card relative  ">
                    <div class=" border-b border-b-border flex items-center justify-between pb-4 mb-6">
                        <h3 class="text-sm font-medium text-primary">تقرير المكالمات</h3>
                        <a href="#"
                            class="flex items-center gap-1 text-primary-text text-sm bg-[#4340931A] px-3 py-1.5 rounded-lg hover:bg-primary-light duration-300 transition">
                            <svg class="stroke-primary-text " width="15" height="16" viewBox="0 0 15 16"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.625 7.375V11.125L6.875 9.875" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M5.625 11.125L4.375 9.875" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M13.75 6.75V9.875C13.75 13 12.5 14.25 9.375 14.25H5.625C2.5 14.25 1.25 13 1.25 9.875V6.125C1.25 3 2.5 1.75 5.625 1.75H8.75"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.75 6.75H11.25C9.375 6.75 8.75 6.125 8.75 4.25V1.75L13.75 6.75Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class=" ">تصدير التقرير</span>
                        </a>
                    </div>
                    <div class=" flex flex-col  mt-4 ">
                        <canvas id="callPieChart"
                            class="mx-auto !h-fit max-xl:!max-w-[400px] !max-w-full !w-full "></canvas>
                        <div class="flex justify-center gap-8 mt-6 text-sm font-medium text-primary-text">
                            <div class="flex items-center gap-1">
                                <span class="inline-block w-2 h-2 bg-[#f2a03d] rounded-full"></span>
                                <span>مكالمات تم الرد</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <span class="inline-block w-2 h-2 bg-[#4032a8] rounded-full"></span>
                                <span>مكالمات لم يتم الرد</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="card">
            <div class=" border-b border-b-border flex items-center justify-between pb-4 mb-6">
                <h3 class="text-sm font-medium text-primary">بيانات المكالمات</h3>
                <a href="#"
                    class="flex items-center gap-1 text-primary-text text-sm bg-[#4340931A] px-3 py-1.5 rounded-lg hover:bg-primary-light duration-300 transition">
                    <svg class="stroke-primary-text " width="15" height="16" viewBox="0 0 15 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.625 7.375V11.125L6.875 9.875" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5.625 11.125L4.375 9.875" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M13.75 6.75V9.875C13.75 13 12.5 14.25 9.375 14.25H5.625C2.5 14.25 1.25 13 1.25 9.875V6.125C1.25 3 2.5 1.75 5.625 1.75H8.75"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.75 6.75H11.25C9.375 6.75 8.75 6.125 8.75 4.25V1.75L13.75 6.75Z" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class=" ">تصدير التقرير</span>
                </a>
            </div>

            <div class="relative flex items-center justify-center !mb-8">
                <canvas id="callSummaryChart" class="!w-[200px] !h-[200px]"></canvas>
                <div class="absolute  text-center">
                    <p class="text-lg font-medium text-primary-text">{{ $summary['total'] }}</p>
                    <p class="text-xs text-primary-text font-medium">إجمالي المكالمات</p>
                </div>
            </div>



            <ul class="space-y-4 text-sm ">
                @foreach ($callSummaryItems as $item)
                    <li
                        class="flex justify-between items-center border-b border-dashed border-b-border pb-2  last:border-b-0">
                        <span class="text-[#1B1854] flex items-center gap-1">
                            <img src="{{ $item['img'] }}" alt="" class="w-4 h-4" />
                            {{ $item['title'] }}
                        </span>
                        <span class="text-[#98A5C3]">{{ $item['value'] }}</span>
                    </li>
                @endforeach
            </ul>


        </div>
    </div>


    {{-- Donut Chart --}}
    <div class="grid grid-cols-1 lg:grid-cols-[1fr,1fr,400px] gap-3 mb-3 ">

        <div class="lg:col-span-2 card">
            <div class=" border-b border-b-border flex items-center justify-between pb-4 mb-6">
                <h3 class="text-sm font-medium text-primary"> أداء الموظفين</h3>
                <a href="#"
                    class="flex items-center gap-1 text-primary-text text-sm bg-[#4340931A] px-3 py-1.5 rounded-lg hover:bg-primary-light duration-300 transition">
                    <svg class="stroke-primary-text " width="15" height="16" viewBox="0 0 15 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.625 7.375V11.125L6.875 9.875" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M5.625 11.125L4.375 9.875" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M13.75 6.75V9.875C13.75 13 12.5 14.25 9.375 14.25H5.625C2.5 14.25 1.25 13 1.25 9.875V6.125C1.25 3 2.5 1.75 5.625 1.75H8.75"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.75 6.75H11.25C9.375 6.75 8.75 6.125 8.75 4.25V1.75L13.75 6.75Z" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span id="customExcelBtn" class=" ">تصدير التقرير</span>
                </a>
            </div>

            <x-dataTable :headers="$headers" :orders="$orders" :datatableSettings="$datatableSettings" />
            <div class="overflow-x-hidden">
                <div
                    class=" rounded-xl overflow-hidden custom-table border border-border dark:border-gray-700 bg-[#f9f9fb] dark:bg-gray-800 shadow overflow-x-auto max-w-full">

                    <table class="js-exportable-order orders-table w-full text-center hidden">
                        <thead class="text-[#81899B] dark:text-gray-300 text-sm rounded-lg overflow-hidden">
                            <tr>
                                @foreach ($headers as $header)
                                    <th class="relative group" data-column="{{ $loop->index }}">
                                        <div
                                            class="hover:bg-gray-200 dark:hover:bg-gray-600 duration-300 py-4 px-4 flex items-center justify-center gap-2 cursor-pointer">
                                            @if ($header['key'] !== 'actions')
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-up-down-icon lucide-arrow-up-down">
                                                    <path d="m21 16-4 4-4-4" />
                                                    <path d="M17 20V4" />
                                                    <path d="m3 8 4-4 4 4" />
                                                    <path d="M7 4v16" />
                                                </svg>
                                            @endif
                                            <span class="text-nowrap">{{ $header['label'] }}</span>
                                        </div>
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="text-sm text-[#A7ABB7] dark:text-gray-300">
                            @foreach ($orders as $index => $order)
                                <tr
                                    class="{{ $index % 2 === 0 ? 'bg-white dark:bg-gray-800' : 'bg-[#f9f9fb] dark:bg-gray-800' }}">


                                    @foreach ($headers as $header)
                                        <td class="py-2 h-[40px]">
                                            @if ($header['key'] === 'actions')
                                                <div class="action-buttons flex justify-center gap-2">
                                                    <button class="action-btn play-btn" data-id="{{ $order->id }}"
                                                        data-voice-url="{{ $order->voice_url ?? '' }}"
                                                        title="تشغيل التسجيل">
                                                        <img class="{{ $index % 2 !== 0 ? 'border-gray-200' : 'border-gray-100' }} dark:invert shadow-sm border rounded-full"
                                                            src="assets/icons/play.png" />
                                                    </button>
                                                    <button class="action-btn share-btn" data-id="{{ $order->id }}"
                                                        title="مشاركة">
                                                        <img class="{{ $index % 2 !== 0 ? 'border-gray-200' : 'border-gray-100' }} dark:invert shadow-sm border rounded-full"
                                                            src="assets/icons/share.png" />
                                                    </button>
                                                    <button class="action-btn download-btn" data-id="{{ $order->id }}"
                                                        title="تعديل">
                                                        <img class="{{ $index % 2 !== 0 ? 'border-gray-200' : 'border-gray-100' }} dark:invert shadow-sm border rounded-full"
                                                            src="assets/icons/download.png" />
                                                    </button>
                                                    <button class="action-btn delete-btn" data-id="{{ $order->id }}"
                                                        title="حذف">
                                                        <img class="{{ $index % 2 !== 0 ? 'border-red-100' : 'border-red-50' }} dark:invert shadow-sm border rounded-full"
                                                            src="assets/icons/delete.png" />
                                                    </button>
                                                </div>
                                            @else
                                                @php
                                                    $value = $order->{$header['key']};
                                                    $isStatus = $header['key'];
                                                    $hasStyle = $isStatus && isset($statusStyles[$value]);
                                                @endphp

                                                @if ($hasStyle)
                                                    <span
                                                        class="{{ $statusStyles[$value]['color'] }} {{ $statusStyles[$value]['bg'] }} {{ $statusStyles[$value]['border'] }} rounded-full gap-[2px] px-3 py-1 inline-flex items-center justify-center text-xs">
                                                        @isset($statusStyles[$value]['icon'])
                                                            {!! $statusStyles[$value]['icon'] !!}
                                                        @endisset
                                                        {{ $value }}
                                                    </span>
                                                @else
                                                    {{ $value }}
                                                @endif
                                            @endif
                                        </td>
                                    @endforeach

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div id="custom-pagination-wrapper" class="mt-4 flex justify-center"></div>
            </div>


        </div>
        {{-- Recent Calls --}}
        <div class="card">
            <div class=" border-b border-b-border flex items-center justify-between pb-4 mb-6">
                <h3 class="text-sm font-medium text-primary">سجل المكالمات الاخيرة</h3>
            </div>

            @foreach ($calls as $call)
                <div class="flex items-start justify-between gap-2 mb-4">
                    <!-- Play Button -->
                    <div class="  flex-none flex items-start gap-2 ">
                        <div class=" w-[50px] text-[10px] uppercase text-[#98A5C3] ">
                            {{ $call['time'] }}
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div
                                class=" flex-none w-[15px] h-[15px] rounded-full flex items-center justify-center {{ $call['dot_color'] }}">
                                <span class="w-[8px] h-[8px] rounded-full bg-white block "></span>
                            </div>
                            @if (!$loop->last)
                                <span class="h-[40px] bg-border block w-[2px]"></span>
                            @endif
                        </div>
                    </div>

                    <!-- Call Info -->
                    <div class=" flex-1 text-[10px] font-medium text-[#222F36]">
                        {{ $call['description'] }} من رقم
                        <span class="font-bold {{ $call['number_color'] }}">{{ $call['number'] }}</span>
                    </div>

                    <!-- Status Dot -->
                    <svg class="cursor-pointer -mt-2 group " width="35" height="36" viewBox="0 0 35 36"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.194946" width="35" height="35" rx="17.5" fill="#F9F9FB" />
                        <path class="group-hover:scale-110 duration-300 "
                            d="M23.3806 16.0405C23.6808 16.2002 23.9319 16.4385 24.107 16.7299C24.2821 17.0213 24.3746 17.3549 24.3746 17.6949C24.3746 18.0349 24.2821 18.3685 24.107 18.6599C23.9319 18.9513 23.6808 19.1896 23.3806 19.3493L15.3731 23.7036C14.0837 24.4055 12.5 23.493 12.5 22.0499V13.3405C12.5 11.8968 14.0837 10.9849 15.3731 11.6855L23.3806 16.0405Z"
                            fill="#434093" />
                    </svg>

                </div>
            @endforeach
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

    <script>
        // Call Response Pie
        const answered = {{ $data['call_report']['answered'] }};
        const missed = {{ $data['call_report']['missed'] }};
        const total = answered + missed;

        new Chart(document.getElementById('callPieChart'), {
            type: 'pie',
            data: {
                labels: ['تم الرد', 'لم يتم الرد'],
                datasets: [{
                    data: [answered, missed],
                    backgroundColor: ['#f2a03d', '#4032a8']
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    datalabels: {
                        color: '#fff',
                        font: {
                            weight: 'bold',
                            size: 16
                        },
                        formatter: (value) => {
                            let percentage = ((value / total) * 100).toFixed(0);
                            return `${percentage}%`;
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });

        // Hourly Line Chart
        new Chart(document.getElementById('hourlyCallsChart'), {
            type: 'line',
            data: {
                labels: {!! json_encode(array_keys($data['hourly_calls'])) !!},
                datasets: [{
                    label: 'عدد المكالمات',
                    data: {!! json_encode(array_values($data['hourly_calls'])) !!},
                    borderColor: '#4032a8',
                    backgroundColor: 'rgba(64, 50, 168, 0.1)',
                    fill: true,
                    tension: 0.3
                }]
            }
        });

        // Call Summary Donut
        new Chart(document.getElementById('callSummaryChart'), {
            type: 'doughnut',
            data: {
                labels: ['صادرة', 'واردة', 'فائتة', 'مرفوضة', 'حصرية'],
                datasets: [{
                    data: [
                        {{ $summary['outgoing'] }},
                        {{ $summary['incoming'] }},
                        {{ $summary['missed'] }},
                        {{ $summary['rejected'] }},
                        {{ $summary['exclusive'] }}
                    ],
                    backgroundColor: ['#4032a8', '#00cc66', '#f2a03d', '#ff4d4d', '#4d79ff'],
                    borderWidth: 2
                }]
            },
            options: {
                cutout: '70%',
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const value = context.parsed;
                                const percentage = ((value / total) * 100).toFixed(1);
                                return `${context.label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection
