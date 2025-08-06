@extends('layouts.app')
@php
    $headers = [
        ['key' => 'employee', 'label' => 'اسم الموظف'],
        ['key' => 'exclusive_answered', 'label' => 'المكالمات الحصريه تم الرد'],
        ['key' => 'exclusive_calls', 'label' => 'المكالمات الحصريه'],
        ['key' => 'call_duration', 'label' => 'مدة المكالمات'],
        ['key' => 'missed_calls', 'label' => 'مكالمات لم يتم الرد'],
        ['key' => 'answered_calls', 'label' => 'مكالمات تم الرد'],
        ['key' => 'total_calls', 'label' => 'اجمالي المكالمات'],
    ];

    $orders = [
        (object)[
            'employee' => 'يسرا علام',
            'exclusive_answered' => 20,
            'exclusive_calls' => 5,
            'call_duration' => '10 دقائق',
            'missed_calls' => 7,
            'answered_calls' => 18,
            'total_calls' => 25,
        ],
        (object)[
            'employee' => 'محمد أحمد',
            'exclusive_answered' => 18,
            'exclusive_calls' => 4,
            'call_duration' => '12 دقيقة',
            'missed_calls' => 5,
            'answered_calls' => 22,
            'total_calls' => 27,
        ],
        (object)[
            'employee' => 'نورا سعيد',
            'exclusive_answered' => 15,
            'exclusive_calls' => 3,
            'call_duration' => '8 دقائق',
            'missed_calls' => 6,
            'answered_calls' => 20,
            'total_calls' => 26,
        ],
        (object)[
            'employee' => 'خالد عبدالله',
            'exclusive_answered' => 22,
            'exclusive_calls' => 6,
            'call_duration' => '15 دقيقة',
            'missed_calls' => 4,
            'answered_calls' => 24,
            'total_calls' => 28,
        ],
        (object)[
            'employee' => 'سارة ناصر',
            'exclusive_answered' => 17,
            'exclusive_calls' => 4,
            'call_duration' => '9 دقائق',
            'missed_calls' => 5,
            'answered_calls' => 21,
            'total_calls' => 26,
        ],
        (object)[
            'employee' => 'علي وليد',
            'exclusive_answered' => 25,
            'exclusive_calls' => 7,
            'call_duration' => '20 دقيقة',
            'missed_calls' => 3,
            'answered_calls' => 29,
            'total_calls' => 32,
        ],
        (object)[
            'employee' => 'لينا فاروق',
            'exclusive_answered' => 19,
            'exclusive_calls' => 5,
            'call_duration' => '11 دقيقة',
            'missed_calls' => 6,
            'answered_calls' => 23,
            'total_calls' => 29,
        ],
        (object)[
            'employee' => 'أحمد سليمان',
            'exclusive_answered' => 14,
            'exclusive_calls' => 3,
            'call_duration' => '7 دقائق',
            'missed_calls' => 7,
            'answered_calls' => 18,
            'total_calls' => 25,
        ],
        (object)[
            'employee' => 'فاطمة خالد',
            'exclusive_answered' => 21,
            'exclusive_calls' => 5,
            'call_duration' => '14 دقيقة',
            'missed_calls' => 4,
            'answered_calls' => 25,
            'total_calls' => 29,
        ],
        (object)[
            'employee' => 'ماجد راشد',
            'exclusive_answered' => 16,
            'exclusive_calls' => 4,
            'call_duration' => '6 دقائق',
            'missed_calls' => 5,
            'answered_calls' => 20,
            'total_calls' => 25,
        ],
    ];

    $datatableSettings = [
        'order' => [[0, 'desc']],
        'buttons' => ['excel', 'copy'],
        'paging' => true,
        'searching' => true,
        'info' => false,
        'limit' => 7,
    ];

    $statusStyles = [
        'تم الرد' => [
            'color' => 'text-[#43AF63] dark:text-green-400',
            'bg' => 'bg-[#43AF631A] dark:bg-green-900/30',
            'border' => 'border border-[#43AF63] dark:border-green-800',
        ],
        'لم يتم الرد' => [
            'color' => 'text-[#CF4242] dark:text-red-400',
            'bg' => 'bg-[#CF42421A] dark:bg-red-900/30',
            'border' => 'border border-[#CF4242] dark:border-red-800',
        ],
        'وارد' => [
            'color' => 'text-[#DC8521] dark:text-orange-300',
            'bg' => 'bg-[#DC85211A] dark:bg-orange-900/30',
            'border' => 'border border-[#DC8521] dark:border-orange-800',
            'icon' =>
                '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.125 3V3.625C10.125 4.80375 10.125 5.3925 10.4913 5.75875C10.8575 6.125 11.4462 6.125 12.625 6.125H13.5625M13.5625 6.125L12 4.875M13.5625 6.125L12 7.375" stroke="#DC8521" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"/><path d="M10.4724 9.59253L10.188 9.89253C10.188 9.89253 9.51116 10.6044 7.66428 8.66003C5.81741 6.71565 6.49429 6.00378 6.49429 6.00378L6.67366 5.81441C7.11491 5.34941 7.15679 4.60315 6.77116 4.05815L5.98366 2.94378C5.50616 2.26878 4.58429 2.18003 4.03741 2.75566L3.05678 3.78753C2.78616 4.07316 2.60491 4.44253 2.62679 4.85316C2.68304 5.90316 3.13178 8.16128 5.63428 10.7969C8.28866 13.5907 10.7793 13.7019 11.7974 13.6013C12.1199 13.57 12.3999 13.3957 12.6255 13.1582L13.513 12.2232C14.113 11.5919 13.9443 10.5107 13.1768 10.0694L11.983 9.38191C11.4793 9.09253 10.8662 9.17753 10.4724 9.5919" fill="#DC8521"/></svg>',
        ],
        'صادر' => [
            'color' => 'text-[#0B649F] dark:text-blue-300',
            'bg' => 'bg-[#0B649F1A] dark:bg-blue-900/30',
            'border' => 'border border-[#0B649F] dark:border-blue-800',
            'icon' =>
                '<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0177 11.8744C14.8422 12.6269 15.0956 13.1372 15.2486 13.4238C15.2832 13.4894 15.2958 13.5643 15.2846 13.6376C15.2734 13.7109 15.2389 13.7786 15.1863 13.8309C14.44 14.5855 13.9512 15.1255 13.2388 15.2099C11.6465 15.4107 9.27606 14.1473 6.94437 11.8059C4.60368 9.47487 3.33953 7.10441 3.54029 5.51279C3.62476 4.79972 4.16683 4.31025 4.92283 3.56325C4.97407 3.51091 5.04086 3.47656 5.11324 3.46533C5.18562 3.4541 5.25969 3.46659 5.32437 3.50095C5.6096 3.65395 6.12122 3.90595 6.87514 4.73325C7.64499 5.58064 7.89006 6.21756 7.93922 6.58033C7.94303 6.64673 7.93231 6.71315 7.9078 6.77497C7.88329 6.83679 7.84557 6.89252 7.79729 6.93826C7.51276 7.2221 6.86129 7.81402 6.77268 8.11795C6.65568 8.49041 6.87099 8.95079 7.24829 9.50395C7.48368 9.83695 7.80699 10.2191 8.16906 10.5819C8.53114 10.9439 8.91329 11.2673 9.24629 11.5026C9.80014 11.8793 10.2605 12.0946 10.633 11.9776C10.9369 11.8889 11.5288 11.2382 11.8134 10.9543C11.8587 10.9056 11.9142 10.8676 11.976 10.8429C12.0378 10.8183 12.1042 10.8076 12.1706 10.8117C12.5334 10.8602 13.1703 11.1059 14.0177 11.8744ZM11.0636 3.66018C11.4042 3.66018 11.6846 3.94195 11.6846 4.28325L11.6894 6.20026L14.9232 2.95195C14.9805 2.89397 15.0488 2.84793 15.124 2.81652C15.1992 2.7851 15.2799 2.76892 15.3614 2.76892C15.443 2.76892 15.5237 2.7851 15.5989 2.81652C15.6741 2.84793 15.7424 2.89397 15.7997 2.95195C15.9159 3.06872 15.9812 3.22679 15.9812 3.39156C15.9812 3.55634 15.9159 3.71441 15.7997 3.83118L12.5708 7.06495H14.4538C14.7938 7.06495 15.0741 7.34672 15.0741 7.68872C15.0745 7.76986 15.0588 7.85028 15.028 7.92536C14.9972 8.00043 14.9519 8.06869 14.8947 8.12619C14.8374 8.1837 14.7694 8.22934 14.6944 8.26047C14.6195 8.29161 14.5391 8.30764 14.458 8.30764H11.1529C10.964 8.30691 10.7832 8.23127 10.65 8.09732C10.5168 7.96337 10.4422 7.78206 10.4426 7.59318L10.4474 4.2791C10.4474 3.9371 10.7278 3.65533 11.0636 3.66018Z" fill="#0B649F"/></svg>',
        ],
    ];

    $cards = [
        [
            'title' => '  تم الرد',
            'value' => 15,
            'icon' => '<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="40" height="40" rx="20" fill="#434093"/>
            <path d="M17.6586 13.712L17.2556 12.806C16.9926 12.214 16.8606 11.918 16.6636 11.691C16.4171 11.4067 16.0955 11.1977 15.7356 11.088C15.4486 11 15.1246 11 14.4756 11C13.5276 11 13.0536 11 12.6556 11.182C12.1646 11.4205 11.7845 11.8393 11.5946 12.351C11.4516 12.764 11.4926 13.189 11.5746 14.04C12.4479 23.09 17.4099 28.0517 26.4606 28.925C27.3106 29.007 27.7356 29.048 28.1496 28.905C28.6607 28.715 29.079 28.3354 29.3176 27.845C29.4996 27.446 29.4996 26.972 29.4996 26.024C29.4996 25.375 29.4996 25.051 29.4116 24.764C29.3018 24.4041 29.0928 24.0825 28.8086 23.836C28.5826 23.639 28.2856 23.508 27.6936 23.244L26.7876 22.842C26.1456 22.557 25.8256 22.414 25.4996 22.383C25.1874 22.353 24.8726 22.3969 24.5806 22.511C24.2756 22.63 24.0066 22.854 23.4666 23.304C22.9296 23.751 22.6616 23.974 22.3336 24.094C22.0187 24.2029 21.683 24.2374 21.3526 24.195C21.0066 24.145 20.7426 24.003 20.2126 23.72C18.5676 22.84 17.6596 21.933 16.7796 20.287C16.4966 19.757 16.3556 19.493 16.3046 19.147C16.262 18.817 16.2962 18.4816 16.4046 18.167C16.5246 17.838 16.7486 17.57 17.1956 17.033C17.6456 16.493 17.8706 16.224 17.9886 15.919C18.1026 15.627 18.1466 15.312 18.1166 15C18.0866 14.675 17.9436 14.354 17.6576 13.712" stroke="white" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            ',
        ],
        [
            'title' => 'لم يتم الرد',
            'value' => '8:30' . ' س.د',
            'icon' => '<svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="0.5" width="40" height="40" rx="20" fill="#E59C3B"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.6 20.003L24.491 23.894L23.643 24.743L19.4 20.5V14.5H20.6V20.003ZM20 30.5C14.477 30.5 10 26.023 10 20.5C10 14.977 14.477 10.5 20 10.5C25.523 10.5 30 14.977 30 20.5C30 26.023 25.523 30.5 20 30.5ZM20 29.3C22.3339 29.3 24.5722 28.3729 26.2225 26.7225C27.8729 25.0722 28.8 22.8339 28.8 20.5C28.8 18.1661 27.8729 15.9278 26.2225 14.2775C24.5722 12.6271 22.3339 11.7 20 11.7C17.6661 11.7 15.4278 12.6271 13.7775 14.2775C12.1271 15.9278 11.2 18.1661 11.2 20.5C11.2 22.8339 12.1271 25.0722 13.7775 26.7225C15.4278 28.3729 17.6661 29.3 20 29.3Z" fill="white"/>
                </svg>
                ',
        ],
        [
            'title' => 'حصرية',
            'value' => 30 . ' د',
            'icon' => '<svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="40" height="40" rx="20" fill="#519ED1"/>
                <path d="M20.5 29.5C19.3947 29.5 18.357 29.2913 17.387 28.874C16.417 28.4567 15.5687 27.8847 14.842 27.158C14.1153 26.4313 13.5433 25.5827 13.126 24.612C12.7087 23.6413 12.5 22.604 12.5 21.5H13.5C13.5 23.4333 14.1833 25.0833 15.55 26.45C16.9167 27.8167 18.5667 28.5 20.5 28.5C22.4333 28.5 24.0833 27.8167 25.45 26.45C26.8167 25.0833 27.5 23.4333 27.5 21.5H28.5C28.5 22.6053 28.2913 23.643 27.874 24.613C27.4567 25.583 26.8847 26.4313 26.158 27.158C25.4313 27.8847 24.5827 28.4567 23.612 28.874C22.6413 29.2913 21.604 29.5 20.5 29.5ZM12.5 21.5C12.5 20.3947 12.7087 19.357 13.126 18.387C13.5433 17.417 14.1153 16.5687 14.842 15.842C15.5687 15.1153 16.4173 14.5433 17.388 14.126C18.3587 13.7087 19.396 13.5 20.5 13.5C21.4693 13.5 22.4067 13.6733 23.312 14.02C24.2173 14.3667 25.048 14.8563 25.804 15.489L26.896 14.396L27.604 15.104L26.512 16.196C27.1453 16.9527 27.635 17.7837 27.981 18.689C28.327 19.5943 28.5 20.5313 28.5 21.5H27.5C27.5 19.5667 26.8167 17.9167 25.45 16.55C24.0833 15.1833 22.4333 14.5 20.5 14.5C18.5667 14.5 16.9167 15.1833 15.55 16.55C14.1833 17.9167 13.5 19.5667 13.5 21.5H12.5ZM17.885 11V10H23.115V11H17.885ZM20.5 14.5C18.656 14.5 17.0617 15.1263 15.717 16.379C14.3723 17.6317 13.639 19.172 13.517 21H16.817L18.483 24.304L22.5 16.5L24.812 21H27.482C27.3607 19.172 26.6273 17.6317 25.282 16.379C23.9387 15.1263 22.3447 14.5 20.5 14.5ZM20.5 28.5C22.344 28.5 23.9383 27.8737 25.283 26.621C26.6277 25.3683 27.361 23.828 27.483 22H24.183L22.517 18.696L18.5 26.5L16.189 22H13.516C13.638 23.828 14.3713 25.3683 15.716 26.621C17.0607 27.8737 18.6553 28.5 20.5 28.5ZM20.5 28.5C18.5667 28.5 16.9167 27.8167 15.55 26.45C14.1833 25.0833 13.5 23.4333 13.5 21.5C13.5 19.5667 14.1833 17.9167 15.55 16.55C16.9167 15.1833 18.5667 14.5 20.5 14.5C22.4333 14.5 24.0833 15.1833 25.45 16.55C26.8167 17.9167 27.5 19.5667 27.5 21.5C27.5 23.4333 26.8167 25.0833 25.45 26.45C24.0833 27.8167 22.4333 28.5 20.5 28.5Z" fill="white"/>
                </svg>
                ',
        ],
        [
            'title' => 'حصرية تم الرد',
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
            'title' => 'معدل رد الصادرة',
            'value' => 20,
            'icon' => '<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="#E8C33C"/>
                    <path d="M15.875 23C18.5674 23 20.75 20.8174 20.75 18.125C20.75 15.4326 18.5674 13.25 15.875 13.25C13.1826 13.25 11 15.4326 11 18.125C11 20.8174 13.1826 23 15.875 23Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.95898 26.75C9.70813 25.5982 10.7331 24.6517 11.9409 23.9965C13.1486 23.3412 14.5009 22.998 15.8749 22.998C17.249 22.998 18.6012 23.3412 19.809 23.9965C21.0167 24.6517 22.0417 25.5982 22.7909 26.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24.125 23C25.499 22.9992 26.8513 23.3418 28.0592 23.9967C29.267 24.6517 30.292 25.5981 31.0409 26.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.3145 13.5969C22.9813 13.3309 23.6987 13.2155 24.4153 13.2589C25.1319 13.3023 25.8301 13.5035 26.46 13.8481C27.0899 14.1926 27.6359 14.672 28.059 15.252C28.4821 15.8321 28.7718 16.4984 28.9076 17.2034C29.0433 17.9084 29.0216 18.6346 28.8441 19.3303C28.6666 20.026 28.3376 20.6738 27.8807 21.2276C27.4238 21.7814 26.8502 22.2274 26.2009 22.5338C25.5516 22.8402 24.8427 22.9994 24.1248 23" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    ',
        ],
    ];
@endphp

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('content')
    <!-- Header -->
    <div class="card">
        <div class="flex max-sm:flex-col  max-sm:!gap-4 max-sm:!justify-center  items-center justify-between">
            <div class="w-full  max-sm:w-fit">
                <h2
                    class="mb-2 flex  max-sm:justify-center items-center gap-1 text-sm font-bold mt-1 text-primary-text dark:text-gray-200">
                    <img class="w-5 h-5 dark:invert" src="{{ asset('assets/icons/square.svg') }}" />
                    <span class="-mb-[3px] "> إحصائيات الموظفين</span>
                </h2>
                <h3 class="text-xs text-gray-500 dark:text-gray-400"> تعرف علي إحصائيات الموظفين الخاصة بك</h3>
            </div>

            <button id="customExcelBtn"
                class="flex-none flex gap-2 items-center text-sm py-2 bg-[#4e4ba0] hover:opacity-80 duration-300 text-white px-3 rounded-lg transition
                       dark:bg-[#374151] dark:hover:bg-gray-600">
                <img src="{{ asset('assets/icons/apk.svg') }}" class="w-5 h-5" />
                <span>تصدير الملف</span>
            </button>
        </div>

        {{-- Summary Cards --}}
        <div class="grid  grid-cols-2  lg:grid-cols-3 xl:grid-cols-5  justify-center items-center  gap-3 mt-8 mb-12 ">
            @foreach ($cards as $card)
                <div
                    class=" max-md:flex-col max-md:items-center  text-gray-500 first:text-white first:!bg-gradient-to-t to-[#434093] from-[#2A285E] dark:!bg-gray-700 lg:!py-8 lg:!px-8 dark:!text-white card flex items-start gap-2 max-w-full w-full">
                    <div class=" text-right flex-1 max-md:order-[2]">
                        <h3 class="text-sm max-md:text-center ">{{ $card['title'] }}</h3>
                        <p class="text-xl font-[500] max-md:text-center opacity-70 mt-1">{{ $card['value'] }}</p>
                    </div>
                    {!! $card['icon'] !!}
                </div>
            @endforeach
        </div>


        <div class="flex justify-between flex-wrap gap-4 mb-4 items-center">
            <!-- Search Input -->
            <div
                class="flex items-center px-2 gap-0 bg-bg-muted dark:bg-gray-700 shadow-inner border border-gray-200 dark:border-gray-600 rounded-md">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M10.5 3.75H15" stroke="#637381" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="dark:stroke-gray-400" />
                    <path opacity="0.4" d="M10.5 6H12.75" stroke="#637381" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="dark:stroke-gray-400" />
                    <path
                        d="M15.75 8.625C15.75 12.5625 12.5625 15.75 8.625 15.75C4.6875 15.75 1.5 12.5625 1.5 8.625C1.5 4.6875 4.6875 1.5 8.625 1.5"
                        stroke="#637381" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                        class="dark:stroke-gray-400" />
                    <path opacity="0.4" d="M16.5 16.5L15 15" stroke="#637381" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" class="dark:stroke-gray-400" />
                </svg>
                <input style="border: none !important ;" type="text" id="customSearchInput"
                    placeholder="ابحث في الجدول..."
                    class="bg-transparent !px-2 py-2 text-sm w-full dark:text-gray-200 dark:placeholder-gray-400" />
            </div>

            <div class="flex gap-3 items-center rtl">
                <!-- Date Filter -->
                <div class="relative">
                    <!-- Date Filter Trigger -->
                    <div id="dateFilterTrigger" onclick="toggleFilterPopup()"
                        class="relative flex items-center px-4 gap-2 bg-bg-muted dark:bg-gray-700 shadow-inner border border-gray-200 dark:border-gray-600 rounded-md cursor-pointer">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1.5V3.75" stroke="#637381" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" class="dark:stroke-gray-400" />
                            <path d="M6 1.5V3.75" stroke="#637381" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" class="dark:stroke-gray-400" />
                            <path d="M15.375 6.8175H2.625" stroke="#637381" stroke-width="1.5" stroke-miterlimit="10"
                                stroke-linecap="round" stroke-linejoin="round" class="dark:stroke-gray-400" />
                            <path
                                d="M15.75 9.75751V6.375C15.75 4.125 14.625 2.625 12 2.625H6C3.375 2.625 2.25 4.125 2.25 6.375V12.75C2.25 15 3.375 16.5 6 16.5H12C14.625 16.5 15.75 15 15.75 12.75"
                                stroke="#637381" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" class="dark:stroke-gray-400" />
                            <path d="M9.00314 10.275H8.99641" stroke="#637381" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="dark:stroke-gray-400" />
                            <path d="M11.7795 10.275H11.7728" stroke="#637381" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="dark:stroke-gray-400" />
                            <path d="M11.7795 12.525H11.7728" stroke="#637381" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="dark:stroke-gray-400" />
                        </svg>
                        <span id="selectedDateLabel" class="text-sm text-gray-700 dark:text-gray-300 py-2">اختر
                            التاريخ</span>
                    </div>

                    <!-- Filter Popup -->
                    <div id="filterPopup"
                        class="absolute left-0 z-[10000] mt-2 w-[400px] overflow-hidden bg-white dark:bg-gray-800 shadow-inner rounded-lg max-h-0 transition-all duration-300 ease-in-out ">
                        <div
                            class="border border-gray-200 dark:border-gray-700 p-2 grid grid-cols-3 gap-1 text-sm text-gray-700 dark:text-gray-300">
                            @php
                                $labels = [
                                    'This hour',
                                    'Today',
                                    'This week',
                                    'This month',
                                    'This quarter',
                                    'This year',
                                    'Last hour',
                                    'Yesterday',
                                    'Last week',
                                    'Last month',
                                    'Last quarter',
                                    'Last year',
                                    'Last 60 min',
                                    'Last 24 h',
                                    'Last 7 days',
                                    'Last 30 days',
                                    'Last 90 days',
                                    'Last 365 days',
                                    'Custom',
                                ];
                            @endphp

                            @foreach ($labels as $label)
                                <span
                                    class="rounded-md cursor-pointer hover:bg-bg-muted dark:hover:bg-gray-700 duration-300 p-2"
                                    onclick="handleFilterSelection('{{ $label }}')">{{ $label }}</span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Flatpickr -->
                    <input type="text" id="dateRangePicker"
                        class="mt-2 hidden dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"
                        placeholder="اختر التاريخ المخصص" />
                    {{-- <input type="text" id="dateRangePicker" class="mt-2 hidden" placeholder="اختر التاريخ المخصص" /> --}}
                </div>

                <!-- Filter Button -->
                <div class="relative inline-block text-left">
                    <button onclick="toggleSidebar()" id="toggleSidebarBtn"
                        class="h-[38px] relative flex items-center px-4 gap-2 bg-bg-muted dark:bg-gray-700 shadow-inner border border-gray-200 dark:border-gray-600 rounded-md cursor-pointer">
                        <span id="selectedDateRange" class="dark:text-gray-300">فلترة</span>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.5 13.9538C16.5 14.1029 16.4407 14.246 16.3352 14.3515C16.2298 14.457 16.0867 14.5163 15.9375 14.5163H12.1125C11.9872 14.9834 11.7113 15.3962 11.3276 15.6906C10.9438 15.985 10.4737 16.1445 9.99 16.1445C9.50634 16.1445 9.03618 15.985 8.65243 15.6906C8.26869 15.3962 7.99278 14.9834 7.8675 14.5163H2.0625C1.91332 14.5163 1.77024 14.457 1.66475 14.3515C1.55926 14.246 1.5 14.1029 1.5 13.9538C1.5 13.8046 1.55926 13.6615 1.66475 13.556C1.77024 13.4505 1.91332 13.3913 2.0625 13.3913H7.8675C7.99278 12.9241 8.26869 12.5113 8.65243 12.2169C9.03618 11.9225 9.50634 11.763 9.99 11.763C10.4737 11.763 10.9438 11.9225 11.3276 12.2169C11.7113 12.5113 11.9872 12.9241 12.1125 13.3913H15.9375C16.0867 13.3913 16.2298 13.4505 16.3352 13.556C16.4407 13.6615 16.5 13.8046 16.5 13.9538ZM16.5 4.04626C16.5 4.19544 16.4407 4.33852 16.3352 4.44401C16.2298 4.5495 16.0867 4.60876 15.9375 4.60876H14.1C13.9747 5.07592 13.6988 5.48869 13.3151 5.78309C12.9313 6.07748 12.4612 6.23705 11.9775 6.23705C11.4938 6.23705 11.0237 6.07748 10.6399 5.78309C10.2562 5.48869 9.98028 5.07592 9.855 4.60876H2.0625C1.98863 4.60876 1.91549 4.59421 1.84724 4.56594C1.77899 4.53767 1.71699 4.49624 1.66475 4.44401C1.61252 4.39177 1.57109 4.32976 1.54282 4.26152C1.51455 4.19327 1.5 4.12013 1.5 4.04626C1.5 3.97239 1.51455 3.89925 1.54282 3.831C1.57109 3.76275 1.61252 3.70074 1.66475 3.64851C1.71699 3.59628 1.77899 3.55484 1.84724 3.52658C1.91549 3.49831 1.98863 3.48376 2.0625 3.48376H9.855C9.98028 3.0166 10.2562 2.60383 10.6399 2.30943C11.0237 2.01504 11.4938 1.85547 11.9775 1.85547C12.4612 1.85547 12.9313 2.01504 13.3151 2.30943C13.6988 2.60383 13.9747 3.0166 14.1 3.48376H15.9375C16.0116 3.48275 16.0852 3.49661 16.1539 3.52452C16.2226 3.55243 16.2851 3.59383 16.3375 3.64626C16.3899 3.6987 16.4313 3.76111 16.4592 3.82981C16.4871 3.89851 16.501 3.97211 16.5 4.04626ZM16.5 8.99626C16.501 9.07041 16.4871 9.14401 16.4592 9.21271C16.4313 9.28141 16.3899 9.34382 16.3375 9.39625C16.2851 9.44869 16.2226 9.49009 16.1539 9.518C16.0852 9.54591 16.0116 9.55977 15.9375 9.55876H7.1625C7.03722 10.0259 6.76131 10.4387 6.37757 10.7331C5.99382 11.0275 5.52366 11.187 5.04 11.187C4.55634 11.187 4.08618 11.0275 3.70243 10.7331C3.31869 10.4387 3.04278 10.0259 2.9175 9.55876H2.0625C1.91332 9.55876 1.77024 9.4995 1.66475 9.39401C1.55926 9.28852 1.5 9.14544 1.5 8.99626C1.5 8.84707 1.55926 8.704 1.66475 8.59851C1.77024 8.49302 1.91332 8.43376 2.0625 8.43376H2.9175C3.04278 7.9666 3.31869 7.55383 3.70243 7.25943C4.08618 6.96504 4.55634 6.80547 5.04 6.80547C5.52366 6.80547 5.99382 6.96504 6.37757 7.25943C6.76131 7.55383 7.03722 7.9666 7.1625 8.43376H15.9375C16.0867 8.43376 16.2298 8.49302 16.3352 8.59851C16.4407 8.704 16.5 8.84707 16.5 8.99626Z"
                                fill="#797F8F" class="dark:fill-gray-400" />
                        </svg>
                    </button>
                </div>
            </div>


            <div id="overlay" class="fixed inset-0 bg-[#00000047] dark:bg-[#00000080] backdrop-blur-[2px] z-40 hidden"
                onclick="toggleSidebar()"></div>
            <!-- الشريط الجانبي -->
            <div id="sidebar"
                class="h-screen -translate-x-full overflow-y-auto overflow-x-hidden space-y-4 fixed px-8 py-4 top-0 left-0 w-[400px] bg-white dark:bg-gray-800 shadow-lg z-50 transition-transform duration-300 ease-in-out">
                <div class="w-[calc(100%+24px)] !-mr-3 flex justify-between items-center mb-8">
                    <h2 class="text-lg font-bold text-right text-indigo-950 dark:text-indigo-200">فلترة المكالمات</h2>
                    <button onclick="toggleSidebar()"
                        class="text-gray-400 scale-[2] hover:text-red-500 dark:hover:text-red-400 text-xl">&times;</button>
                </div>

                <!-- اختر الموظف -->
                <div class="select-group">
                    <label class="select-label dark:text-gray-300">اختر الموظف</label>
                    <select class="select-select ">
                        <option class="dark:bg-gray-700">يسرا علام</option>
                        <option class="dark:bg-gray-700">يسرا علام</option>
                    </select>
                </div>

                <x-tags-input label="الوظيفة" name="positions" placeholder="اكتب الوظيفة واضغط Enter" />

                <!-- التاريخ -->
                <x-date-input name="call_date" label="التاريخ" placeholder="اختر التاريخ" :default="'2025-07-02'" />

                <!-- نوع المكالمة -->
                <div class="select-group">
                    <label class="select-label dark:text-gray-300">نوع المكالمة</label>
                    <select class="select-select ">
                        <option class="dark:bg-gray-700">واردة</option>
                        <option class="dark:bg-gray-700">واردة</option>
                    </select>
                </div>

                <!-- حالة المكالمة -->
                <div class="select-group">
                    <label class="select-label dark:text-gray-300">حالة المكالمة</label>
                    <select class="select-select ">
                        <option class="dark:bg-gray-700">واردة</option>
                    </select>
                </div>

                <!-- جهة الاتصال -->
                <div x-data="{ selected: 0 }" class="input-group">
                    <label class="input-label dark:text-gray-300">جهة الاتصال</label>
                    <div class="grid grid-cols-2 border border-dashed   dark:border-gray-600">
                        <template x-for="(label, index) in ['واتساب' , 'SIM']" :key="index">
                            <button x-text="label"
                                :class="selected === index ?
                                    'bg-[#43409314] dark:bg-indigo-900/20 text-[#434093] dark:text-indigo-300  border-dashed border border-[#434093] dark:border-indigo-400' :
                                    'border-x border-gray-100 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700/50'"
                                class="py-[10px] text-[10px] px-[2px] transition duration-200" @click="selected = index">
                            </button>
                        </template>
                        <input type="hidden" name="call_duration" :value="['واتساب', 'SIM'][selected]">
                    </div>
                </div>

                <!-- مدة المكالمة -->
                <div x-data="{ selected: 0 }" class="input-group">
                    <label class="input-label dark:text-gray-300">مدة المكالمة</label>
                    <div class="grid grid-cols-4 border border-dashed  overflow-hidden dark:border-gray-600">
                        <template x-for="(label, index) in ['1-10 دقائق', '10-15 د', '15-25 د', 'أكثر من 30 د']"
                            :key="index">
                            <button x-text="label"
                                :class="selected === index ?
                                    'bg-[#43409314] dark:bg-indigo-900/20 text-[#434093] dark:text-indigo-300  border-dashed border border-[#434093] dark:border-indigo-400' :
                                    'border-x border-gray-100 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700/50'"
                                class="py-[10px] text-[10px] px-[2px] transition duration-200" @click="selected = index">
                            </button>
                        </template>
                        <input type="hidden" name="call_duration"
                            :value="['1-10 دقائق', '10-15 د', '15-25 د', 'أكثر من 30 د'][selected]">
                    </div>
                </div>

                <!-- الأزرار -->
                <div class="flex gap-4 !mt-12">
                    <button class="flex-1 bg-[#434093] dark:bg-indigo-700 text-white rounded-md py-2">تطبيق</button>
                    <button
                        class="flex-1 border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 text-indigo-900 dark:text-gray-300 rounded-md py-2">إعادة</button>
                </div>
            </div>
        </div>

        {{-- filteration --}}
        <div class="flex items-center gap-2 flex-wrap mb-4 mt-8">
            <!-- Filter Chip - Dark Mode Enhanced -->
            <span
                class="p-2 flex items-center rounded-lg text-sm bg-[#EDEDFC] dark:bg-indigo-900/20 text-[#5753AB] dark:text-indigo-300 border border-[#EDEDFC] dark:border-indigo-800/50">
                جهة الاتصال :
                <span class="text-black/80 dark:text-gray-200 ml-1">واتساب</span>
                <svg class="cursor-pointer ltr:ml-2 rtl:mr-2 dark:[&>path]:fill-gray-400" width="10" height="9"
                    viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.81889 0.257392C1.526 -0.0355015 1.05113 -0.0355015 0.758233 0.257392C0.46534 0.550285 0.46534 1.02516 0.758233 1.31805L3.94021 4.50003L0.758263 7.68198C0.46537 7.97487 0.46537 8.44974 0.758263 8.74264C1.05116 9.03553 1.52603 9.03553 1.81892 8.74264L5.00087 5.56069L8.18285 8.74267C8.47575 9.03557 8.95062 9.03557 9.24351 8.74267C9.53641 8.44978 9.53641 7.97491 9.24351 7.68201L6.06153 4.50003L9.24354 1.31802C9.53644 1.02512 9.53644 0.55025 9.24354 0.257357C8.95065 -0.0355363 8.47578 -0.0355359 8.18288 0.257357L5.00087 3.43937L1.81889 0.257392Z"
                        fill="#868FA0" />
                </svg>
            </span>

            <!-- Additional chips (repeated as needed) -->
            <span
                class="p-2 flex items-center rounded-lg text-sm bg-[#EDEDFC] dark:bg-indigo-900/20 text-[#5753AB] dark:text-indigo-300 border border-[#EDEDFC] dark:border-indigo-800/50">
                جهة الاتصال :
                <span class="text-black/80 dark:text-gray-200 ml-1">واتساب</span>
                <svg class="cursor-pointer ltr:ml-2 rtl:mr-2 dark:[&>path]:fill-gray-400" width="10" height="9"
                    viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.81889 0.257392C1.526 -0.0355015 1.05113 -0.0355015 0.758233 0.257392C0.46534 0.550285 0.46534 1.02516 0.758233 1.31805L3.94021 4.50003L0.758263 7.68198C0.46537 7.97487 0.46537 8.44974 0.758263 8.74264C1.05116 9.03553 1.52603 9.03553 1.81892 8.74264L5.00087 5.56069L8.18285 8.74267C8.47575 9.03557 8.95062 9.03557 9.24351 8.74267C9.53641 8.44978 9.53641 7.97491 9.24351 7.68201L6.06153 4.50003L9.24354 1.31802C9.53644 1.02512 9.53644 0.55025 9.24354 0.257357C8.95065 -0.0355363 8.47578 -0.0355359 8.18288 0.257357L5.00087 3.43937L1.81889 0.257392Z"
                        fill="#868FA0" />
                </svg>
            </span>
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
                                                    data-voice-url="{{ $order->voice_url ?? '' }}" title="تشغيل التسجيل">
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
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        let isPopupOpen = false;

        function toggleFilterPopup() {
            const popup = document.getElementById('filterPopup');
            const input = document.getElementById('dateRangePicker');

            // إغلاق flatpickr إذا كان ظاهر
            input.classList.add('hidden');

            // فتح أو إغلاق النافذة
            popup.classList.toggle('max-h-96');
            popup.classList.toggle('max-h-0');
            isPopupOpen = !isPopupOpen;
        }

        function handleFilterSelection(label) {
            const labelSpan = document.getElementById('selectedDateLabel');
            const popup = document.getElementById('filterPopup');
            const input = document.getElementById('dateRangePicker');

            if (label === 'Custom') {
                // إغلاق القائمة
                popup.classList.remove('max-h-96');
                popup.classList.add('max-h-0');
                isPopupOpen = false;

                // إظهار input وتهيئة flatpickr
                input.classList.remove('hidden');

                flatpickr("#dateRangePicker", {
                    mode: "range",
                    dateFormat: "d/m/Y",
                    theme: "dark", // Force dark theme when in dark mode
                    onClose: function(selectedDates, dateStr) {
                        labelSpan.textContent = dateStr || "اختر التاريخ";
                        input.classList.add('hidden'); // إخفاء input بعد الاختيار
                    }
                });

                // فتح التقويم تلقائيًا
                input.click();
            } else {
                // إغلاق القائمة
                popup.classList.remove('max-h-96');
                popup.classList.add('max-h-0');
                isPopupOpen = false;

                // إخفاء التقويم إن كان ظاهرًا
                input.classList.add('hidden');

                // تحديث النص
                labelSpan.textContent = label;
            }
        }

        // إغلاق عند الضغط خارج العنصر
        document.addEventListener('click', function(e) {
            const trigger = document.getElementById('dateFilterTrigger');
            const popup = document.getElementById('filterPopup');
            const input = document.getElementById('dateRangePicker');

            if (!trigger.contains(e.target) && !popup.contains(e.target) && !input.contains(e.target)) {
                popup.classList.remove('max-h-96');
                popup.classList.add('max-h-0');
                input.classList.add('hidden');
                isPopupOpen = false;
            }
        });
    </script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');

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
@endpush
