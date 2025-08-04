@extends('layouts.app')

@php

@endphp

@section('content')
    <!-- Header -->
    <div class="card">
        <div class="flex items-center justify-between">
            <div class="w-full">
                <h2 class="mb-2 flex items-center gap-1 text-sm font-bold mt-1 text-primary-text dark:text-gray-200">
                    <img class="w-5 h-5 dark:invert" src="{{ asset('assets/icons/square.svg') }}" />
                    <span class="-mb-[1px]">الاعدادات</span>
                </h2>
                <h3 class="text-xs text-gray-500 dark:text-gray-400">تعرف علي ملفك الشخصي و الاعدادات الخاص بك</h3>
            </div>

        </div>

        <!-- Tab Buttons -->
        <div class="border-b-[2px] border-b-[#F9F9FB] dark:border-b-gray-700 flex space-x-4 rtl:space-x-reverse mt-6"
            id="tab-buttons">
            <button data-tab="profile"
                class="tab-btn -mb-[2px] !pb-[18px] text-sm tab-inactive flex items-center gap-2 py-1 focus:outline-none
											 hover:text-[#434093] dark:hover:text-indigo-300 transition-colors">
                الملف الشخصي
            </button>
            <button data-tab="settings"
                class="tab-btn -mb-[2px] !pb-[18px] text-sm tab-inactive flex items-center gap-2 py-1 focus:outline-none
                       hover:text-[#434093] dark:hover:text-indigo-300 transition-colors">
                الاعدادات
            </button>

        </div>

        <!-- Tab Content -->
        <div class="mt-16">
            <div id="tab-profile" class="" data-tab-content>
                <div class="grid grid-cols-2 gap-4 max-md:grid-cols-1">

                    <div class="input-group">
                        <label for="" class="input-label">الاسم بالكامل</label>
                        <input type="text" class="input-field">
                    </div>
                    <div class="input-group">
                        <label for="" class="input-label">البريد الالكتروني</label>
                        <input type="text" class="input-field">
                    </div>
                    <div class="input-group">
                        <label for="" class="input-label">كلمة المرور</label>
                        <input type="text" class="input-field">
                    </div>
                    <div class="input-group">
                        <label for="" class="input-label">باقتك الحالية</label>
                        <input type="text" class="input-field">
                    </div>
                </div>

            </div>



            <div id="tab-settings" data-tab-content>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6   text-[#81899B] font-medium">
                    @php
                        $settings = [
                            'record_calls' => 'إمكانية تسجيل المكالمات الصوتية تلقائيًا للمستخدمين',
                            'track_whatsapp' => 'السماح للمستخدمين بإمكانية تتبع مكالمات الواتساب',
                            'show_notification' => 'إظهار إشعار عند بدء تتبع المكالمة',
                            'save_contacts' => 'إمكانية حفظ بيانات جهات الاتصال تلقائيًا',
                            'share_logs' => 'مشاركة سجل المكالمات مع المدير',
                        ];
                    @endphp

                    @foreach ($settings as $key => $label)
                        <div class="flex items-center justify-between border-b border-border dark:border-gray-700  pb-4">
                            <span class="text-sm">{{ $label }}</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" name="{{ $key }}" class="sr-only peer" checked>
                                <div
                                    class="w-11 h-6 bg-gray-600 rounded-full peer peer-checked:bg-[#434093] transition-all duration-300">
                                </div>
                                <div
                                    class="absolute left-0.5 top-0.5 bg-white w-5 h-5 rounded-full shadow-md transform peer-checked:translate-x-5 transition-transform duration-300">
                                </div>
                            </label>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!-- JS Logic -->
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
            activateTab('profile');

            // Add click events
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    const tab = button.getAttribute('data-tab');
                    activateTab(tab);
                });
            });
        });
    </script>
@endsection
