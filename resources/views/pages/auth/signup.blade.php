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

        .step-dot {
            width: 118px;
            height: 7px;
            border-radius: 0.375rem;
            /* Equivalent to Tailwind's rounded-md */
            transition: background-color 0.3s ease;
        }

        /* Inactive state */
        .inactive-dot {
            background-color: rgba(203, 200, 200, 0.32);
            /* #cbc8c852 */
        }

        /* Responsive override for lg screens */
        @media (min-width: 1024px) {
            .inactive-dot {
                background-color: rgba(255, 255, 255, 0.32);
                /* #FFFFFF52 */
            }
        }

        /* Active state */
        .active-dot {
            background-color: #1C1C1C;
            /* Assuming primary-dark is #1C1C1C or replace with your actual value */
        }
    </style>
@endpush


@section('authContent')
    <div class='signup'>
        <div class=" mx-auto px-4 min-h-[500px]">
            <form>
                <div data-step='1' class="step-section grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-8 ">
                    <x-form.input-field label="الاسم الأول" name="first_name" type="text" placeholder="ادخل الاسم الأول" />

                    <x-form.input-field label="اسم العائلة" name="last_name" type="text" placeholder="ادخل اسم العائلة" />

                    <x-form.input-field label="رقم الجوال" name="mobile" type="tel" placeholder="ادخل رقم الجوال" />

                    <x-form.input-field label="البريد الإلكتروني" name="email" type="email"
                        placeholder="ادخل بريدك الإلكتروني" />


                    <x-form.input-field label="تأكيد كلمة المرور" name="password_confirmation" type="password"
                        placeholder="اعد إدخال كلمة المرور" />

                    <x-form.input-field label="كلمة المرور" name="password" type="password" placeholder="انشئ كلمة مرور" />

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

                <div data-step='2' class='step-section inactive-section min-h-[400px] space-y-6'>
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

                <div data-step='3' class="step-section inactive-section  min-h-[400px] relative">
                    <div class="absolute bottom-0 inset-x-0 mb-9 pb-20 text-lg text-primary-dark text-center">
                        لقد تم انشاء حسابك بنجاح
                    </div>
                </div>

                <x-form.button id="dynamicStepBtn" class="mt-[40px]">
                    استمرار
                </x-form.button>

            </form>
        </div>
    </div>
@endsection

@section('sideContent')
    <div>
        <div id="stepIndicators" class='flex gap-[10px] ml-auto  mt-5 justify-center lg:justify-end'>
            <div data-step='3' step- class='step-dot inactive-dot'></div>
            <div data-step='2' class='step-dot inactive-dot'></div>
            <div data-step='1' class='step-dot active-dot'></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentStep = 1;
            const maxStep = 3;

            const stepSections = document.querySelectorAll('.step-section');

            const dynamicBtn = document.getElementById('dynamicStepBtn');
            const stepDots = document.querySelectorAll('#stepIndicators .step-dot');

            const checkbox = document.getElementById("terms");

            const toggleButton = () => {
                dynamicBtn.disabled = !checkbox.checked;
            };

            // Initial check

            checkbox.addEventListener("change", toggleButton);
            toggleButton();

            function updateStepIndicators(step) {
                stepDots.forEach(dot => {
                    // read the step number off the element
                    const dotStep = Number(dot.getAttribute('data-step'));

                    // if it matches the current step, make it active
                    const isActive = dotStep === step;
                    dot.classList.toggle('active-dot', isActive);
                    dot.classList.toggle('inactive-dot', !isActive);
                });
            }


            function showStep(step) {
                stepSections.forEach(section => {
                    const sectionStep = Number(section.dataset.step);
                    const isActive = sectionStep === step;
                    section.classList.toggle('inactive-section', !isActive);
                });


                dynamicBtn.textContent = step === maxStep ? 'تسجيل الدخول' : 'استمرار';
                dynamicBtn.onclick = step === maxStep ?
                    (e) => {
                        e.preventDefault();
                        window.location.href = "{{ url('/login') }}"
                    } :
                    (e) => {
                        e.preventDefault();
                        if (currentStep < maxStep) {
                            currentStep++;
                            showStep(currentStep);
                        }
                    };

                updateStepIndicators(step);
            }

            showStep(currentStep);
        });
    </script>
@endpush
