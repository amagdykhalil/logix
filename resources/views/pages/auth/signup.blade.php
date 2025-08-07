@extends('layouts.auth')

@php

@endphp
@push('styles')
    <style>
        input.styled-checkbox {
            width: 20px;
            height: 20px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #fff;
            border: 1px solid #84B156;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            margin-top: 3px;
            flex-shrink: 0;

        }

        input.styled-checkbox:checked,
        input.styled-checkbox:checked:hover,
        input.styled-checkbox:checked:focus {
            background-color: #84B156;
            border-color: #84B156;
        }



        input.styled-checkbox:checked::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 1px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
    </style>
    <style>
        input.styled-checkbox {
            width: 20px;
            height: 20px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #fff;
            border: 1px solid #84B156;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            margin-top: 3px;
            flex-shrink: 0;

        }

        input.styled-checkbox:checked,
        input.styled-checkbox:checked:hover,
        input.styled-checkbox:checked:focus {
            background-color: #84B156;
            border-color: #84B156;
        }



        input.styled-checkbox:checked::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 1px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
    </style>
@endpush


@section('authContent')
    <div class='login'>
        <div class=" mx-auto px-4 min-h-[500px]">
            <form>
                <div id='step-1' class=" grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-8 ">
                    <x-form.input-field label="الاسم الأول" name="first_name" type="text" placeholder="يسرا" />

                    <x-form.input-field label="اسم العائلة" name="last_name" type="text" placeholder="علام" />

                    <x-form.input-field label="رقم الجوال" name="mobile" type="tel" placeholder="01002766554" />

                    <x-form.input-field label="البريد الإلكتروني" name="email" type="email"
                        placeholder="yosra@gmail.com" />

                    <x-form.input-field label="كلمة المرور" name="password" type="password" />

                    <x-form.input-field label="تأكيد كلمة المرور" name="password_confirmation" type="password" />


                    <div dir='rtl'
                        class="flex items-start gap-2 text-right text-[13px] leading-6 text-black col-span-1 md:col-span-2">

                        <input type="checkbox" id="terms" name="terms"
                            class="styled-checkbox focus:ring-[#84B156] focus:ring-2 focus:outline-none" />

                        <label for="terms" class="cursor-pointer">
                            بالتسجيل لدينا فأنت توافق على
                            <a href="#" class="text-[#84B156] underline hover:text-[#6E9A45]">الشروط والأحكام</a>
                            و
                            <a href="#" class="text-[#84B156] underline hover:text-[#6E9A45]">سياسة الخصوصية</a>
                        </label>
                    </div>
                </div>

                <div id='step-2' class='hidden min-h-[400px] space-y-6'>
                    <x-auth.option-group title="هل لديك خبرة في التجارة الالكترونية" :options="[['text' => 'نعم', 'is_active' => true], ['text' => 'لا', 'is_active' => false]]" />
                    <x-auth.option-group title="عدد سنوات الخبرة" :options="[
                        ['text' => 'لا توجد خبرة', 'is_active' => false],
                        ['text' => '1', 'is_active' => false],
                        ['text' => '2', 'is_active' => true],
                        ['text' => '3', 'is_active' => false],
                        ['text' => '4', 'is_active' => false],
                        ['text' => '5', 'is_active' => false],
                        ['text' => '6', 'is_active' => false],
                        ['text' => 'أكثر من 7', 'is_active' => false],
                    ]" />

                    <x-auth.option-group title="متوسط عدد الطلبات" :options="[
                        ['text' => '100', 'is_active' => true],
                        ['text' => '300', 'is_active' => false],
                        ['text' => '500', 'is_active' => false],
                        ['text' => '1000', 'is_active' => false],
                        ['text' => '2500', 'is_active' => false],
                        ['text' => '5000', 'is_active' => false],
                        ['text' => '10000', 'is_active' => false],
                    ]" />

                </div>

                <div id="step-3" class="hidden min-h-[400px] relative">
                    <div class="absolute bottom-0 inset-x-0 mb-9 pb-20 text-lg text-primary-dark text-center">
                        لقد تم انشاء حسابك بنجاح
                    </div>
                </div>


                <x-form.button id="loginRedirectBtn" class="mt-[40px] hidden">
                    تسجيل الدخول
                </x-form.button>
                <x-form.button id="nextStepBtn" class='mt-[40px]'>
                    استمرار
                </x-form.button>
            </form>
        </div>
    </div>
@endsection

@section('sideContent')
    <div>
        <div id="stepIndicators" class='flex gap-[10px] ml-auto  mt-5 justify-center lg:justify-end'>
            <div class='step-dot w-[118px] h-[7px] rounded-md bg-[#cbc8c852] lg:bg-[#FFFFFF52] '></div>
            <div class='step-dot w-[118px] h-[7px] rounded-md bg-[#cbc8c852] lg:bg-[#FFFFFF52]'></div>
            <div class='step-dot w-[118px] h-[7px] rounded-md bg-primary-dark'></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let currentStep = 1;
        const maxStep = 3;

        const stepSections = {
            1: document.getElementById('step-1'),
            2: document.getElementById('step-2'), // in case you add it later
            3: document.getElementById('step-3'), // note: multiple divs use id="step-3"
        };

        const nextBtn = document.getElementById('nextStepBtn');
        const loginBtn = document.getElementById('loginRedirectBtn');
        const stepDots = document.querySelectorAll('#stepIndicators .step-dot');
        const checkbox = document.getElementById("terms");

        const toggleButton = () => {
            nextStepBtn.disabled = !checkbox.checked;
        };

        // Initial check
        toggleButton();

        checkbox.addEventListener("change", toggleButton);

        function updateStepIndicators(step) {
            stepDots.forEach((dot, index) => {
                const reverseIndex = stepDots.length - step;
                if (index === reverseIndex) {
                    dot.classList.add('bg-primary-dark');
                    dot.classList.remove('bg-[#cbc8c852] lg:bg-[#FFFFFF52]');
                } else {
                    dot.classList.remove('bg-primary-dark');
                    dot.classList.add('bg-[#cbc8c852] lg:bg-[#FFFFFF52]');
                }
            });

        }

        function showStep(step) {
            // Hide all step sections
            Object.values(stepSections).forEach(section => {
                section?.classList.add('hidden');
            });

            // Show current step section(s)
            stepSections[step]?.classList.remove('hidden');

            // Toggle buttons visibility
            if (step === maxStep) {
                nextBtn.classList.add('hidden');
                loginBtn.classList.remove('hidden');
            } else {
                nextBtn.classList.remove('hidden');
                loginBtn.classList.add('hidden');
            }

            updateStepIndicators(step);
        }

        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (currentStep < maxStep) {
                currentStep++;
                showStep(currentStep);
            }
        });

        loginBtn.addEventListener('click', function() {
            window.location.href = "{{ url('/login') }}";
        });
    </script>
@endpush
