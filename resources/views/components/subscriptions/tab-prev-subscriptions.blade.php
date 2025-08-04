@php
    $headers = [
        ['key' => 'transaction_id', 'label' => 'رقم العملية'],
        ['key' => 'payment_date', 'label' => 'تاريخ الدفع'],
        ['key' => 'amount_paid', 'label' => 'المبلغ المدفوع'],
        ['key' => 'package_type', 'label' => 'نوع الباقة'],
        ['key' => 'payment_method', 'label' => 'طريقة الدفع'],
        ['key' => 'payment_status', 'label' => 'حالة الدفع'],
        ['key' => 'receipt_image', 'label' => 'إيصال الدفع'],
    ];

    $orders = [
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'تم الدفع',
            'payment_method' => 'بطاقة بنكية',
            'package_type' => 'الباقة المميزة',
            'amount_paid' => '199 ريال',
            'payment_date' => '17-6-2025',
            'transaction_id' => '#123456789',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'فشل الدفع',
            'payment_method' => 'حوالة بنكية',
            'package_type' => 'الباقة الأساسية',
            'amount_paid' => '99 ريال',
            'payment_date' => '16-6-2025',
            'transaction_id' => '#987654321',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'تم الدفع',
            'payment_method' => 'محفظة إلكترونية',
            'package_type' => 'الباقة الاحترافية',
            'amount_paid' => '299 ريال',
            'payment_date' => '15-6-2025',
            'transaction_id' => '#456789123',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'معلق',
            'payment_method' => 'بطاقة بنكية',
            'package_type' => 'الباقة المميزة',
            'amount_paid' => '199 ريال',
            'payment_date' => '14-6-2025',
            'transaction_id' => '#321654987',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'تم الدفع',
            'payment_method' => 'الدفع عند الاستلام',
            'package_type' => 'الباقة الأساسية',
            'amount_paid' => '99 ريال',
            'payment_date' => '13-6-2025',
            'transaction_id' => '#789123456',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'فشل الدفع',
            'payment_method' => 'بطاقة بنكية',
            'package_type' => 'الباقة الاحترافية',
            'amount_paid' => '299 ريال',
            'payment_date' => '12-6-2025',
            'transaction_id' => '#654987321',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'تم الدفع',
            'payment_method' => 'محفظة إلكترونية',
            'package_type' => 'الباقة المميزة',
            'amount_paid' => '199 ريال',
            'payment_date' => '11-6-2025',
            'transaction_id' => '#147258369',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'معلق',
            'payment_method' => 'حوالة بنكية',
            'package_type' => 'الباقة الأساسية',
            'amount_paid' => '99 ريال',
            'payment_date' => '10-6-2025',
            'transaction_id' => '#369258147',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'تم الدفع',
            'payment_method' => 'بطاقة بنكية',
            'package_type' => 'الباقة الاحترافية',
            'amount_paid' => '299 ريال',
            'payment_date' => '9-6-2025',
            'transaction_id' => '#258369147',
        ],
        (object) [
            'receipt_image' => 'photo.png',
            'payment_status' => 'فشل الدفع',
            'payment_method' => 'الدفع عند الاستلام',
            'package_type' => 'الباقة المميزة',
            'amount_paid' => '199 ريال',
            'payment_date' => '8-6-2025',
            'transaction_id' => '#951753824',
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
        'تم الدفع' => [
            'color' => 'text-[#43AF63] dark:text-green-400',
            'bg' => 'bg-[#43AF631A] dark:bg-green-900/30',
            'border' => 'border border-[#43AF63] dark:border-green-800',
        ],
        'فشل الدفع' => [
            'color' => 'text-[#CF4242] dark:text-red-400',
            'bg' => 'bg-[#CF42421A] dark:bg-red-900/30',
            'border' => 'border border-[#CF4242] dark:border-red-800',
        ],
        'الباقة الاحترافية' => [
            'color' => 'text-[#DC8521] dark:text-orange-300',
            'bg' => 'bg-[#DC85211A] dark:bg-orange-900/30',
            'border' => 'border border-[#DC8521] dark:border-orange-800',
        ],
        'الباقة المميزة' => [
            'color' => 'text-[#0B649F] dark:text-blue-300',
            'bg' => 'bg-[#0B649F1A] dark:bg-blue-900/30',
            'border' => 'border border-[#0B649F] dark:border-blue-800',
        ],
        'الباقة الأساسية' => [
            'color' => 'text-[#434093] dark:text-blue-300',
            'bg' => 'bg-[#4340931A] dark:bg-blue-900/30',
            'border' => 'border border-[#434093] dark:border-blue-800',
        ],
    ];
@endphp

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush


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
        <input style="border: none !important ;" type="text" id="customSearchInput" placeholder="ابحث في الجدول..."
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
                <span id="selectedDateLabel" class="text-sm text-gray-700 dark:text-gray-300 py-2">اختر التاريخ</span>
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
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
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
                    <tr class="{{ $index % 2 === 0 ? 'bg-white dark:bg-gray-800' : 'bg-[#f9f9fb] dark:bg-gray-800' }}">


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
