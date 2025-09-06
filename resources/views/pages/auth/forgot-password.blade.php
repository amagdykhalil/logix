@extends('layouts.auth')

@push('styles')
    <style>
        .inactive-section {
            display: none;
        }
    </style>
@endpush

@section('authContent')
    <div class='signup'>
        <form class=" mx-auto px-4 min-h-[500px] flex flex-col justify-between ">

            <div data-step='1' class="step-section">
                <x-form.input-field label="البريد الالكتروني" name="email" type="email"
                    placeholder="ادخل بريدك الإلكتروني" />
            </div>
            <div data-step='2' class="step-section inactive-section text-black">
                <div class="text-center space-y-6">
                    <div class="font-semibold text-[#84B156] bg-[#84B1561A] p-3 text-sm mx-auto w-fit rounded-lg">
                        <span>yosra@gmail.com</span> للبريد الالكتروني OTP تم إرسال كود
                    </div>

                    <div class="space-y-4">
                        <x-form.otp-input name="otp" :length="5" />
                        <button id='send-again' class="block text-sm font-medium text-gray-700 text-center mx-auto">إعادة
                            الارسال</button>
                    </div>
                </div>
            </div>
            <div data-step='3' class="step-section inactive-section space-y-6">
                <x-form.input-field label="كلمة المرور الجديدة" name="password" type="password"
                    placeholder="انشئ كلمة مرور" />
                <x-form.input-field label="تأكيد كلمة المرور" name="confirmPassword" type="password"
                    placeholder="اعد إدخال كلمة المرور" />
            </div>

            <x-form.button id="dynamicStepBtn" class="mt-[40px]">
                OTP إرسال كود
            </x-form.button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentStep = 1;
            const maxStep = 3;

            // Step-specific content for forgot password
            const stepContent = {
                1: {
                    title: '!!نسيت كلمة المرور؟ ',
                    description: "خدمات متكاملة للتجارة الإلكترونية تبدأ من الاستيراد وتنتهي بالتسليم… نحن شريكك للنجاح في الشرق الأوسط."
                },
                2: {
                    title: 'OTP إرسال',
                    description: "خدمات متكاملة للتجارة الإلكترونية تبدأ من الاستيراد وتنتهي بالتسليم… نحن شريكك للنجاح في الشرق الأوسط."
                },
                3: {
                    title: 'تعيين كلمة مرور جديدة',
                    description: "خدمات متكاملة للتجارة الإلكترونية تبدأ من الاستيراد وتنتهي بالتسليم… نحن شريكك للنجاح في الشرق الأوسط."
                }
            };

            const stepSections = document.querySelectorAll('.step-section');
            const dynamicBtn = document.getElementById('dynamicStepBtn');
            const sendAgain = document.getElementById('send-again');

            sendAgain.addEventListener('click', (e) => {
                e.preventDefault();
                console.log("send otp again")
            })
            // Function to update side content
            function updateSideContent(step) {
                const content = stepContent[step];
                if (content) {
                    // Update desktop side content
                    const titles = document.querySelectorAll('.auth-side-title');
                    const descriptions = document.querySelectorAll('.auth-side-description');
                    titles.forEach(title => {
                        title.textContent = content.title;
                    });

                    descriptions.forEach(description => {
                        description.textContent = content.description;
                    });
                }
            }

            function showStep(step) {
                stepSections.forEach(section => {
                    const sectionStep = Number(section.dataset.step);
                    const isActive = sectionStep === step;
                    section.classList.toggle('inactive-section', !isActive);
                });

                // Update button text based on step
                const buttonTexts = {
                    1: 'OTP إرسال كود',
                    2: 'استمرار',
                    3: 'تأكيد'
                };

                dynamicBtn.textContent = buttonTexts[step] || 'استمرار';
                console.log('step === maxStep', step === maxStep)
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

                // Update side content for current step
                updateSideContent(step);
            }

            showStep(currentStep);
        });
    </script>
@endpush
