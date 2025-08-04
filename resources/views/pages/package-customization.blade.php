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
    <div class="card !pb-12 ">
        <div class="flex items-center justify-between">
            <div class="w-fit">
                <h2 class="mb-2 flex items-center gap-1 text-sm font-bold mt-1 text-primary-text dark:text-gray-200">
                    <img class="w-5 h-5 dark:invert" src="{{ asset('assets/icons/square.svg') }}" />
                    <span class="-mb-[1px]">تخصيص باقة الاشتراك </span>
                </h2>
                <h3  class="text-xs text-gray-500 dark:text-gray-400">   تعرف علي باقات الاشتراك المتاحة الان</h3> 
            </div>
        </div>


        <div class=" mt-8 max-w-[550px] w-full mx-auto border border-border rounded-2xl p-6 "  > 

            <div x-data="{ selected: 0 }" class="input-group">
                <label class="input-label dark:text-gray-300">  نظام الاشتراك</label>
                <div class="grid grid-cols-2 border border-dashed   dark:border-gray-600">
                    <template x-for="(label, index) in [ 'باقة احترافية' , 'باقة أساسية' ]" :key="index">
                        <button x-text="label"
                            :class="selected === index ?
                                'bg-[#43409314] dark:bg-indigo-900/20 text-[#434093] dark:text-indigo-300  border-dashed border border-[#434093] dark:border-indigo-400' :
                                'border-x border-gray-100 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700/50'"
                            class="py-[10px] text-[10px] px-[2px] transition duration-200" @click="selected = index">
                        </button>
                    </template>
                    <input type="hidden" name="call_duration" :value="[ 'باقة احترافية' , 'باقة أساسية' ][selected]">
                </div>
            </div>

            <!-- مدة المكالمة -->
            <div x-data="{ selected: 0 }" class="input-group">
                <label class="input-label dark:text-gray-300">نظام الاشتراك</label>
                <div class="grid grid-cols-4 border border-dashed  overflow-hidden dark:border-gray-600">
                    <template x-for="(label, index) in ['نظام الاشتراك' ,'جنيه' ,'درهم' ,'دولار $']"
                        :key="index">
                        <button x-text="label"
                            :class="selected === index ?
                                'bg-[#43409314] dark:bg-indigo-900/20 text-[#434093] dark:text-indigo-300  border-dashed border border-[#434093] dark:border-indigo-400' :
                                'border-x border-gray-100 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700/50'"
                            class="py-[10px] text-[10px] px-[2px] transition duration-200" @click="selected = index">
                        </button>
                    </template>
                    <input type="hidden" name="call_duration"
                        :value="['نظام الاشتراك' ,'جنيه' ,'درهم' ,'دولار $'][selected]">
                </div>
            </div>
            <div class="select-group">
                <label class="select-label dark:text-gray-300"> عدد المستخدمين</label>
                <select class="select-select ">
                    <option class="dark:bg-gray-700"> 5</option>
                    <option class="dark:bg-gray-700"> 15</option>
                    <option class="dark:bg-gray-700"> 25</option>
                </select>
            </div>

            <div class=" !mt-6 flex items-center justify-between">
                <span class="text-sm dark:text-white text-[#1A1A1A] ">تكلفة الموظف الواحد</span>
                <span class="text-sm dark:invert text-[#434093] ">7 $</span>
            </div>
            <div class=" !mt-6 flex items-center justify-between">
                <span class="text-sm dark:text-white text-[#1A1A1A] "> المبلغ الكلي :</span>
                <span class="text-sm dark:invert text-[#E9A760] ">200 $</span>
            </div>

            <!-- الأزرار -->
            <div class="flex gap-4 !mt-12">
                <button class="flex-1 bg-[#434093] dark:bg-indigo-700 text-white rounded-md py-2">أشتري الان</button>
            </div>
        </div>
    </div>
@endsection
