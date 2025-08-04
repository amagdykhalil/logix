<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- SEO Metadata --}}
    <title>@yield('title', 'Calls Trak')</title>
    <meta name="description" content="@yield('meta_description', 'Callstrak - منصة لتحسين التواصل وتحليل المكالمات.')">
    <meta name="keywords" content="@yield('meta_keywords', 'Callstrak, تتبع المكالمات, تسويق, CRM')">
    <meta name="author" content="Callstrak Team">
    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('/assets/logo.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>
        /* Navigation Underline Animation */
        .nav-item {
            position: relative;
            padding-bottom: 8px;
        }


        .nav-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #434093;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .nav-item.active::after {
            width: 100%;
        }

        /* Mobile Menu Styles */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.0s ease-out;
        }

        .mobile-menu.open {
            max-height: 500px;
        }

        .hamburger {
            transition: all 0.3s ease;
        }

        .hamburger.open span:first-child {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .hamburger.open span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.open span:last-child {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        @media (max-width: 900px) {
            .desktop-nav {
                display: none;
            }

            .mobile-nav-button {
                display: flex;
            }
        }

        @media (min-width: 901px) {
            .mobile-nav-button {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav id="navbar"
        class="fixed max-w-[1440px] w-full left-1/2 -translate-x-1/2 top-0 z-50  flex items-center justify-between px-6 py-3 rtl">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <img src="./assets/logo.png" alt="CallsTrak" class="w-28 h-auto" />
        </div>

        <!-- Desktop Menu -->
        <ul class="desktop-nav flex gap-6 text-gray-600 font-medium text-sm rtl">
            <li class="nav-item">
                <a href="#home" class="nav-link pb-2 text-[#434093] font-semibold active">الرئيسية</a>
            </li>
            <li class="nav-item">
                <a href="#features" class="nav-link pb-2 hover:text-[#434093]">المميزات</a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link pb-2 hover:text-[#434093]">عن النظام</a>
            </li>
            <li class="nav-item">
                <a href="#pricing" class="nav-link pb-2 hover:text-[#434093]">الاسعار</a>
            </li>
            <li class="nav-item">
                <a href="{{route("appointment-booking")}}" class="nav-link pb-2 hover:text-[#434093]">اطلب العرض الان</a>
            </li>
        </ul>

        <!-- Mobile Menu Button -->
        <button class="mobile-nav-button  p-2 md:hidden" id="mobile-menu-button">
            <div class="hamburger w-6 flex flex-col justify-between h-5">
                <span class="block w-full h-0.5 bg-gray-600 rounded"></span>
                <span class="block w-full h-0.5 bg-gray-600 rounded"></span>
                <span class="block w-full h-0.5 bg-gray-600 rounded"></span>
            </div>
        </button>

        <!-- Right side controls -->
        <div class="max-[900px]:hidden flex items-center gap-4 max-md:gap-2">
            <!-- Language Switch -->
            <form method="POST" action="{{ route('language.switch') }}" id="language-form" class="hidden">
                @csrf
                <input type="hidden" name="language" id="language-input" value="">
            </form>

            <div class="flex-none flex items-center gap-2 bg-bg-muted h-[45px] px-3 w-fit rounded-full border border-border dark:bg-gray-700 dark:border-gray-600 text-gray-500 dark:text-gray-300 text-sm cursor-pointer select-none"
                onclick="switchLanguage()">
                @if (app()->getLocale() !== 'en')
                    <img src="https://flagcdn.com/w40/gb.png" class="w-5 h-5 rounded-full" alt="EN" />
                    English
                @else
                    <img src="https://flagcdn.com/w40/sa.png" class="w-5 h-5 rounded-full" alt="AR" />
                    العربية
                @endif
            </div>

            <a href="{{ route('auth') }}"
                class=" !flex items-center justify-center  btn !rounded-full !h-[40px] !py-0">تسجيل دخول</a>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu w-full absolute left-0 top-full bg-white shadow-lg" id="mobile-menu">
            <ul class="flex flex-col text-gray-600 font-medium text-sm rtl">
                <li class="nav-item border-b border-gray-100">
                    <a href="#home" class="nav-link block py-4 px-6 text-[#434093] font-semibold active">الرئيسية</a>
                </li>
                <li class="nav-item border-b border-gray-100">
                    <a href="#features" class="nav-link block py-4 px-6 hover:text-[#434093]">المميزات</a>
                </li>
                <li class="nav-item border-b border-gray-100">
                    <a href="#about" class="nav-link block py-4 px-6 hover:text-[#434093]">عن النظام</a>
                </li>
                <li class="nav-item border-b border-gray-100">
                    <a href="#pricing" class="nav-link block py-4 px-6 hover:text-[#434093]">الاسعار</a>
                </li>
                <li class="nav-item border-b border-gray-100">
                    <a href="{{route("appointment-booking")}}" class="nav-link block py-4 px-6 hover:text-[#434093]">اطلب العرض الان</a>
                </li>
                <li class="nav-item border-b border-gray-100">
                    <a href="{{ route('auth') }}" class="nav-link block py-4 px-6 hover:text-[#434093]"> تسجيل دخول</a>
                </li>
                <!-- Language Switcher -->
                <li class="nav-item border-b border-gray-100">
                    <div class="flex items-center justify-between py-4 px-6">
                        <span>اللغة</span>
                        <div onclick="switchLanguage()"
                            class="flex items-center gap-2 bg-gray-100 h-[40px] w-fit rounded-full border px-2 border-gray-200 text-gray-500 text-sm cursor-pointer select-none">
                            @if (app()->getLocale() !== 'en')
                                <img src="https://flagcdn.com/w40/gb.png" class="w-5 h-5 rounded-full" alt="EN" />
                                English
                            @else
                                <img src="https://flagcdn.com/w40/sa.png" class="w-5 h-5 rounded-full" alt="AR" />
                                العربية
                            @endif
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <section id="home" class="min-h-screen bg-[#FFFFFF] relative after:ab " style=" background: linear-gradient( 90deg, rgba(68, 255, 154, 0.11) -0.55%, rgba(68, 176, 255, 0.11) 22.86%, rgba(139, 68, 255, 0.11) 48.36%, rgba(255, 102, 68, 0.11) 73.33%, rgba(235, 255, 112, 0.11) 99.34%);">

        <div class="container flex flex-col min-h-screen justify-between !pt-[150px] mx-auto">
            <div class="flex items-center flex-col ">
                <div class="mb-8  px-3 py-2 rounded-[24px] bg-white w-fit shadow-sm flex items-center gap-2 ">
                    <p class="text-xs bg-[#434093] px-3 py-1 text-white rounded-[24px] ">جديد</p>
                    <p class="text-sm font-semibold text-[#31373D] "> أطلب العرض التوضيحي الان🎉</p>
                </div>

                <h1 class="max-w-5xl w-full text-xl md:leading-[30px]  md:text-2xl lg:leading-[50px]  lg:text-4xl text-center mb-12 font-bold ">
                    أطلق العنان لقدراتك في المكالمات الهاتفية، وتعلّم كيف تحقّق نتائج مبهرة <x-title-square
                        title="مع العملاء" />
                </h1>
                <p class="text-sm text-[#8393AB] max-w-[600px] w-full mx-auto text-center mb-8">
                    احصل على عرض تعريفي من فريق الخبراء لدينا واكتشف كيف يمكننا تعزيز نجاح شركتك. معًا نبني
                    مستقبلًا ناجحًا ومستدامًا لأعمالك.
                </p>

            </div>
            <img src="./assets/landing/hero2.png" class=" max-w-[850px] mx-auto object-contain object-bottom w-full h-full " />
        </div>

        <img src="./assets/landing/bg-hero.png" class=" object-contain z-[-1] w-screen left-1/2 -translate-x-1/2  object-bottom  absolute top-0  h-full " />
        <svg  class="absolute bottom-0 left-0 w-full h-fit " width="1600" height="195" viewBox="0 0 1600 195" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="1610" height="199" transform="matrix(1 0 0 -1 -1 199)" fill="url(#paint0_linear_975_4611)"/><defs><linearGradient id="paint0_linear_975_4611" x1="749.656" y1="199" x2="751.474" y2="50.79" gradientUnits="userSpaceOnUse"><stop stop-color="white" stop-opacity="0"/><stop offset="1" stop-color="#FCFAFE"/></linearGradient></defs></svg>
    </section>


    <section id="features" class="relative bg-[#FCFAFE]  ">
        <div class="container mx-auto py-12 max-md:my-8 ">
            <!-- Title Section -->
            <h2 class="text-center text-xs bg-[#4340931A] text-[#434093] px-3 py-2 rounded-lg w-fit mx-auto mb-2">
                لماذا نحن خيارك الافضل
            </h2>
            <p
                class="text-center text-[30px] max-lg:text-[25px] max-md:text-[20px] max-md:font-[500] font-semibold text-[#212529] mb-12">
                سجّل مكالماتك، راقب الأداء، وارجع للتفاصيل وقت ما تحتاج
            </p>

            <!-- Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 max-xl:gap-4 gap-8">
                <!-- Card 1 -->
                <div class="bg-white p-6 max-lg:p-3 rounded-2xl ">
                    <img src="./assets/landing/sec-2-1.png" alt="" class="w-full object-cover" />
                    <h3 class="text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗كل خدمة تقدم قيمة حقيقية
                    </h3>
                    <p class="text-[#B0BAC0] text-sm max-lg:text-xs "> تتبع المكالمات، تسجيلها، متابعة الدوام، وجدولة
                        أيام العمل – كل شيء تحت سيطرتك بدقة وسهولة. </p>
                </div>
                <!-- Card 1 -->
                <div class="bg-white p-6 max-lg:p-3 rounded-2xl ">
                    <img src="./assets/landing/sec-2-2.png" alt="" class="w-full object-cover" />
                    <h3 class="text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗 كل الأرقام قدامك بلحظة.
                    </h3>
                    <p class="text-[#B0BAC0] text-sm max-lg:text-xs ">من المكالمات لأداء الفريق وساعات العمل – كل
                        البيانات عندك، واضحة وجاهزة للقرار. </p>
                </div>
                <!-- Card 1 -->
                <div class="bg-white p-6 max-lg:p-3 rounded-2xl ">
                    <img src="./assets/landing/sec-2-3.png" alt="" class="w-full object-cover" />
                    <h3 class="text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗 كل تسجيل يوصلك لقرار
                        أوضح </h3>
                    <p class="text-[#B0BAC0] text-sm max-lg:text-xs "> تابعة أحدث تسجيلات المكالمات بكل سهولة، الاستماع
                        إليها مباشرة من النظام، ومشاركتها مع فريقك في ثوانٍ</p>
                </div>


            </div>

        </div>


        <div class="container mx-auto py-12 max-md:my-8 ">
            <!-- Title Section -->
            <h2 class="text-center text-xs bg-[#4340931A] text-[#434093] px-3 py-2 rounded-lg w-fit mx-auto mb-2">
                تميّزك يبدأ بنتائج حقيقية.
            </h2>
            <p
                class="text-center text-[30px] max-lg:text-[25px] max-md:text-[20px] max-md:font-[500] font-semibold text-[#212529] mb-12">
                خدماتنا مصممة لتمنحك الأفضلية جربها الآن، وشاهد الفرق بنفسك.
            </p>

            <!-- Cards Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3  gap-3 lg:gap-6">
                <!-- Box 1 -->
                <div class=" flex flex-col justify-center bg-white p-6 rounded-[30px] border border-gray-100 "
                    style="background: linear-gradient(299.55deg, #F3F2FF 33.13%, #F7F7F7 81.04%);">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.670532" y="26.7026" width="35" height="35" rx="5"
                            transform="rotate(-49.7232 0.670532 26.7026)" fill="#434093" />
                        <g clip-path="url(#clip0_975_5343)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28.9488 31.3918C28.8588 31.6038 28.9348 31.7534 29.1328 31.8366L30.968 32.4566C31.1528 32.519 31.3532 32.4198 31.4156 32.2354C31.5732 31.7706 30.8492 31.6718 30.2252 31.461C31.5316 30.7694 32.6452 29.7626 33.464 28.543C35.8268 25.025 35.384 20.2974 32.3624 17.2758C29.9492 14.863 26.3992 14.0582 23.214 15.1302C22.2864 15.4426 21.4268 15.903 20.6652 16.4826C20.5108 16.6006 20.4808 16.8218 20.5988 16.9762C20.7168 17.131 20.9384 17.1606 21.0928 17.0426C21.7944 16.5086 22.5852 16.085 23.4372 15.7978C24.152 15.557 24.9136 15.4122 25.7056 15.379V16.2518C25.7056 16.447 25.864 16.6054 26.0592 16.6054C26.2544 16.6054 26.4124 16.447 26.4124 16.2518V15.3794C28.5384 15.4694 30.4552 16.3682 31.8632 17.7758C33.2708 19.1834 34.1696 21.1006 34.2596 23.2266H33.3864C33.1912 23.2266 33.0332 23.3846 33.0332 23.5798C33.0332 23.775 33.1912 23.933 33.3864 23.933H34.2596C34.194 25.4914 33.694 26.937 32.8788 28.151C32.1192 29.2818 31.0864 30.2134 29.8756 30.8506L30.2196 29.827C30.3688 29.3866 29.7 29.1606 29.5512 29.6006L28.9488 31.3918ZM26.0684 23.933H30.0188C30.2136 23.933 30.3716 23.7746 30.3716 23.5798C30.3716 23.385 30.214 23.2262 30.0184 23.2266H26.4124V17.8702C26.4124 17.675 26.2544 17.517 26.0592 17.517C25.864 17.517 25.706 17.6754 25.706 17.8702V23.5706C25.7056 23.7794 25.86 23.933 26.0684 23.933ZM23.1272 33.959C23.9108 34.4038 25.0916 34.8418 26.042 34.5918C26.2292 34.5422 26.4104 34.4658 26.5892 34.3622L27.5952 33.7802C28.076 33.4862 28.236 32.863 27.954 32.3742L26.2424 29.409C25.9552 28.911 25.3196 28.741 24.8216 29.0278L23.5528 29.7594C23.4044 29.8454 23.252 29.7774 23.1664 29.639L19.446 23.1958C19.3728 23.0658 19.4168 22.8942 19.5468 22.8198C19.9604 22.5714 20.3944 22.3302 20.8148 22.0874C21.316 21.7978 21.4892 21.141 21.1836 20.6462L19.4836 17.7002C19.196 17.2034 18.5596 17.0342 18.0624 17.3202L17.0776 17.8882C16.7204 18.095 16.4552 18.3626 16.2512 18.7214C15.8772 19.3802 15.704 20.189 15.6972 21.089C15.6808 23.2246 16.6108 25.919 18.0052 28.3346C19.4004 30.751 21.2696 32.9054 23.1272 33.959Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_975_5343">
                                <rect width="20" height="20" fill="white"
                                    transform="translate(15.3352 14.6648)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class=" mt-2 text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗 تحكم كامل في
                        المكالمات لتقييم الأداء </h3>
                    <p class="text-[#A9AAAA] text-sm max-lg:text-xs "> إمكانية تسجيل المكالمات، الاستماع إليها في أي
                        وقت، مشاركتها بسهولة، ومعرفة موقع حدوثها بدقّة.</p>
                </div>

                <!-- Box 2 -->
                <div class=" md:row-span-2 bg-white rounded-[30px] border border-gray-100   "
                    style="background: linear-gradient(180deg, #434093 0%, #2E2B75 100%);">
                    <h3 class="pt-6 px-6  mt-2 text-white text-base max-lg:text-sm font-semibold  mb-1"> 🔗 التقارير
                        والتحليلات </h3>
                    <p class="pt-6 px-6 text-[#A9AAAA] text-sm max-lg:text-xs "> نقدملك تحليل دقيق لكل مكالماتك الواردة
                        والصادرة، يشمل الأداء، أسلوب التواصل، واستجابة العملاء….</p>
                    <img class=" w-[90%] max-md:h-[200px] mt-8" src="./assets/landing/sec-3-1.png" />
                </div>

                <!-- Box 3 -->
                <div class="flex flex-col justify-center  bg-white p-6 rounded-[30px] border border-gray-100 "
                    style="background: linear-gradient(299.55deg, #F3F2FF 33.13%, #F7F7F7 81.04%);">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.670532" y="26.7026" width="35" height="35" rx="5"
                            transform="rotate(-49.7232 0.670532 26.7026)" fill="#434093" />
                        <g clip-path="url(#clip0_975_5343)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28.9488 31.3918C28.8588 31.6038 28.9348 31.7534 29.1328 31.8366L30.968 32.4566C31.1528 32.519 31.3532 32.4198 31.4156 32.2354C31.5732 31.7706 30.8492 31.6718 30.2252 31.461C31.5316 30.7694 32.6452 29.7626 33.464 28.543C35.8268 25.025 35.384 20.2974 32.3624 17.2758C29.9492 14.863 26.3992 14.0582 23.214 15.1302C22.2864 15.4426 21.4268 15.903 20.6652 16.4826C20.5108 16.6006 20.4808 16.8218 20.5988 16.9762C20.7168 17.131 20.9384 17.1606 21.0928 17.0426C21.7944 16.5086 22.5852 16.085 23.4372 15.7978C24.152 15.557 24.9136 15.4122 25.7056 15.379V16.2518C25.7056 16.447 25.864 16.6054 26.0592 16.6054C26.2544 16.6054 26.4124 16.447 26.4124 16.2518V15.3794C28.5384 15.4694 30.4552 16.3682 31.8632 17.7758C33.2708 19.1834 34.1696 21.1006 34.2596 23.2266H33.3864C33.1912 23.2266 33.0332 23.3846 33.0332 23.5798C33.0332 23.775 33.1912 23.933 33.3864 23.933H34.2596C34.194 25.4914 33.694 26.937 32.8788 28.151C32.1192 29.2818 31.0864 30.2134 29.8756 30.8506L30.2196 29.827C30.3688 29.3866 29.7 29.1606 29.5512 29.6006L28.9488 31.3918ZM26.0684 23.933H30.0188C30.2136 23.933 30.3716 23.7746 30.3716 23.5798C30.3716 23.385 30.214 23.2262 30.0184 23.2266H26.4124V17.8702C26.4124 17.675 26.2544 17.517 26.0592 17.517C25.864 17.517 25.706 17.6754 25.706 17.8702V23.5706C25.7056 23.7794 25.86 23.933 26.0684 23.933ZM23.1272 33.959C23.9108 34.4038 25.0916 34.8418 26.042 34.5918C26.2292 34.5422 26.4104 34.4658 26.5892 34.3622L27.5952 33.7802C28.076 33.4862 28.236 32.863 27.954 32.3742L26.2424 29.409C25.9552 28.911 25.3196 28.741 24.8216 29.0278L23.5528 29.7594C23.4044 29.8454 23.252 29.7774 23.1664 29.639L19.446 23.1958C19.3728 23.0658 19.4168 22.8942 19.5468 22.8198C19.9604 22.5714 20.3944 22.3302 20.8148 22.0874C21.316 21.7978 21.4892 21.141 21.1836 20.6462L19.4836 17.7002C19.196 17.2034 18.5596 17.0342 18.0624 17.3202L17.0776 17.8882C16.7204 18.095 16.4552 18.3626 16.2512 18.7214C15.8772 19.3802 15.704 20.189 15.6972 21.089C15.6808 23.2246 16.6108 25.919 18.0052 28.3346C19.4004 30.751 21.2696 32.9054 23.1272 33.959Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_975_5343">
                                <rect width="20" height="20" fill="white"
                                    transform="translate(15.3352 14.6648)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class=" mt-2 text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗 تتبع مكالمات
                        الواتساب </h3>
                    <p class="text-[#A9AAAA] text-sm max-lg:text-xs "> راقب جميع مكالمات واتساب الخاصة بفريقك، واطّلع
                        على التفاصيل الهامة لتحسين الأداء وتوثيق التفاعل مع العملاء.</p>
                </div>

                <!-- Box 4 -->
                <div class="flex flex-col justify-center  bg-white p-6 rounded-[30px] border border-gray-100 "
                    style="background: linear-gradient(299.55deg, #F3F2FF 33.13%, #F7F7F7 81.04%);">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.670532" y="26.7026" width="35" height="35" rx="5"
                            transform="rotate(-49.7232 0.670532 26.7026)" fill="#434093" />
                        <g clip-path="url(#clip0_975_5343)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28.9488 31.3918C28.8588 31.6038 28.9348 31.7534 29.1328 31.8366L30.968 32.4566C31.1528 32.519 31.3532 32.4198 31.4156 32.2354C31.5732 31.7706 30.8492 31.6718 30.2252 31.461C31.5316 30.7694 32.6452 29.7626 33.464 28.543C35.8268 25.025 35.384 20.2974 32.3624 17.2758C29.9492 14.863 26.3992 14.0582 23.214 15.1302C22.2864 15.4426 21.4268 15.903 20.6652 16.4826C20.5108 16.6006 20.4808 16.8218 20.5988 16.9762C20.7168 17.131 20.9384 17.1606 21.0928 17.0426C21.7944 16.5086 22.5852 16.085 23.4372 15.7978C24.152 15.557 24.9136 15.4122 25.7056 15.379V16.2518C25.7056 16.447 25.864 16.6054 26.0592 16.6054C26.2544 16.6054 26.4124 16.447 26.4124 16.2518V15.3794C28.5384 15.4694 30.4552 16.3682 31.8632 17.7758C33.2708 19.1834 34.1696 21.1006 34.2596 23.2266H33.3864C33.1912 23.2266 33.0332 23.3846 33.0332 23.5798C33.0332 23.775 33.1912 23.933 33.3864 23.933H34.2596C34.194 25.4914 33.694 26.937 32.8788 28.151C32.1192 29.2818 31.0864 30.2134 29.8756 30.8506L30.2196 29.827C30.3688 29.3866 29.7 29.1606 29.5512 29.6006L28.9488 31.3918ZM26.0684 23.933H30.0188C30.2136 23.933 30.3716 23.7746 30.3716 23.5798C30.3716 23.385 30.214 23.2262 30.0184 23.2266H26.4124V17.8702C26.4124 17.675 26.2544 17.517 26.0592 17.517C25.864 17.517 25.706 17.6754 25.706 17.8702V23.5706C25.7056 23.7794 25.86 23.933 26.0684 23.933ZM23.1272 33.959C23.9108 34.4038 25.0916 34.8418 26.042 34.5918C26.2292 34.5422 26.4104 34.4658 26.5892 34.3622L27.5952 33.7802C28.076 33.4862 28.236 32.863 27.954 32.3742L26.2424 29.409C25.9552 28.911 25.3196 28.741 24.8216 29.0278L23.5528 29.7594C23.4044 29.8454 23.252 29.7774 23.1664 29.639L19.446 23.1958C19.3728 23.0658 19.4168 22.8942 19.5468 22.8198C19.9604 22.5714 20.3944 22.3302 20.8148 22.0874C21.316 21.7978 21.4892 21.141 21.1836 20.6462L19.4836 17.7002C19.196 17.2034 18.5596 17.0342 18.0624 17.3202L17.0776 17.8882C16.7204 18.095 16.4552 18.3626 16.2512 18.7214C15.8772 19.3802 15.704 20.189 15.6972 21.089C15.6808 23.2246 16.6108 25.919 18.0052 28.3346C19.4004 30.751 21.2696 32.9054 23.1272 33.959Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_975_5343">
                                <rect width="20" height="20" fill="white"
                                    transform="translate(15.3352 14.6648)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class=" mt-2 text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗دعم فني متواصل
                    </h3>
                    <p class="text-[#A9AAAA] text-sm max-lg:text-xs "> فريقنا معك خطوة بخطوة، على مدار الساعة. جاهزين
                        نرد على استفساراتك، نحل أي مشكلة، ونضمن لك تجربة سلسة .</p>
                </div>

                <!-- Box 5 -->
                <div class="flex flex-col justify-center  bg-white p-6 rounded-[30px] border border-gray-100 "
                    style="background: linear-gradient(299.55deg, #F3F2FF 33.13%, #F7F7F7 81.04%);">
                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.670532" y="26.7026" width="35" height="35" rx="5"
                            transform="rotate(-49.7232 0.670532 26.7026)" fill="#434093" />
                        <g clip-path="url(#clip0_975_5343)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28.9488 31.3918C28.8588 31.6038 28.9348 31.7534 29.1328 31.8366L30.968 32.4566C31.1528 32.519 31.3532 32.4198 31.4156 32.2354C31.5732 31.7706 30.8492 31.6718 30.2252 31.461C31.5316 30.7694 32.6452 29.7626 33.464 28.543C35.8268 25.025 35.384 20.2974 32.3624 17.2758C29.9492 14.863 26.3992 14.0582 23.214 15.1302C22.2864 15.4426 21.4268 15.903 20.6652 16.4826C20.5108 16.6006 20.4808 16.8218 20.5988 16.9762C20.7168 17.131 20.9384 17.1606 21.0928 17.0426C21.7944 16.5086 22.5852 16.085 23.4372 15.7978C24.152 15.557 24.9136 15.4122 25.7056 15.379V16.2518C25.7056 16.447 25.864 16.6054 26.0592 16.6054C26.2544 16.6054 26.4124 16.447 26.4124 16.2518V15.3794C28.5384 15.4694 30.4552 16.3682 31.8632 17.7758C33.2708 19.1834 34.1696 21.1006 34.2596 23.2266H33.3864C33.1912 23.2266 33.0332 23.3846 33.0332 23.5798C33.0332 23.775 33.1912 23.933 33.3864 23.933H34.2596C34.194 25.4914 33.694 26.937 32.8788 28.151C32.1192 29.2818 31.0864 30.2134 29.8756 30.8506L30.2196 29.827C30.3688 29.3866 29.7 29.1606 29.5512 29.6006L28.9488 31.3918ZM26.0684 23.933H30.0188C30.2136 23.933 30.3716 23.7746 30.3716 23.5798C30.3716 23.385 30.214 23.2262 30.0184 23.2266H26.4124V17.8702C26.4124 17.675 26.2544 17.517 26.0592 17.517C25.864 17.517 25.706 17.6754 25.706 17.8702V23.5706C25.7056 23.7794 25.86 23.933 26.0684 23.933ZM23.1272 33.959C23.9108 34.4038 25.0916 34.8418 26.042 34.5918C26.2292 34.5422 26.4104 34.4658 26.5892 34.3622L27.5952 33.7802C28.076 33.4862 28.236 32.863 27.954 32.3742L26.2424 29.409C25.9552 28.911 25.3196 28.741 24.8216 29.0278L23.5528 29.7594C23.4044 29.8454 23.252 29.7774 23.1664 29.639L19.446 23.1958C19.3728 23.0658 19.4168 22.8942 19.5468 22.8198C19.9604 22.5714 20.3944 22.3302 20.8148 22.0874C21.316 21.7978 21.4892 21.141 21.1836 20.6462L19.4836 17.7002C19.196 17.2034 18.5596 17.0342 18.0624 17.3202L17.0776 17.8882C16.7204 18.095 16.4552 18.3626 16.2512 18.7214C15.8772 19.3802 15.704 20.189 15.6972 21.089C15.6808 23.2246 16.6108 25.919 18.0052 28.3346C19.4004 30.751 21.2696 32.9054 23.1272 33.959Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_975_5343">
                                <rect width="20" height="20" fill="white"
                                    transform="translate(15.3352 14.6648)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class=" mt-2 text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗 لوحة تحكم مميزة
                    </h3>
                    <p class="text-[#A9AAAA] text-sm max-lg:text-xs "> تابع كل التفاصيل بسهولة، من المكالمات إلى
                        الأداء، في واجهة ذكية وسهلة الاستخدام.</p>
                </div>
            </div>

            <div class="btn cursor-pointer !rounded-full !px-12 !w-fit mx-auto mt-12 ">انضم إلينا</div>

        </div>
 
        <div class="container mx-auto py-12 max-md:my-8 ">
            <!-- Title Section -->
            <h2 class="text-center text-xs bg-[#4340931A] text-[#434093] px-3 py-2 rounded-lg w-fit mx-auto mb-2">
                تبدأ ازاي
            </h2>
            <p
                class="text-center text-[30px] max-lg:text-[25px] max-md:text-[20px] max-md:font-[500] font-semibold text-[#212529] mb-12">
                جاهز تبدأ؟ خلينا نمشي معك خطوة بخطوة.
            </p>

            <!-- Cards Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 max-xl:gap-4 gap-8">
                <!-- Card 1 -->
                <div class="  flex flex-col items-center gap-2 ">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="80" height="80" rx="20" fill="#434093"/><path fill-rule="evenodd" clip-rule="evenodd" d="M50.6101 40.2408C50.7525 39.4081 50.8268 38.5523 50.8268 37.6789C50.8268 29.3299 44.048 22.5512 35.6985 22.5512C27.3495 22.5512 20.5707 29.3299 20.5707 37.6789C20.5707 46.0285 27.3495 52.8067 35.6985 52.8067C36.1368 52.8067 36.5702 52.7885 36.9992 52.7517L37.1158 54.1217C36.6489 54.1619 36.1759 54.1817 35.6985 54.1817C26.5905 54.1817 19.1957 46.7875 19.1957 37.6789C19.1957 28.5709 26.5905 21.1762 35.6985 21.1762C44.807 21.1762 52.2018 28.5709 52.2018 37.6789C52.2018 38.6915 52.1099 39.6826 51.935 40.6451C55.6217 42.063 58.2402 45.6391 58.2402 49.8224C58.2402 55.247 53.8364 59.6509 48.4117 59.6509C42.9871 59.6509 38.5827 55.247 38.5827 49.8224C38.5827 47.8589 39.1596 46.0296 40.1529 44.494H28.246L26.6768 41.7759L27.344 40.8183C28.8207 38.7008 31.1225 37.333 33.6519 37.0272C31.8892 36.2423 30.6588 34.4741 30.6588 32.4215C30.6588 29.6396 32.9171 27.3818 35.6985 27.3818C38.4798 27.3818 40.7381 29.6396 40.7381 32.4215C40.7381 34.4741 39.5078 36.2423 37.745 37.0272C40.2745 37.333 42.5768 38.7008 44.053 40.8183L44.1536 40.9624C45.4423 40.3415 46.8866 39.9933 48.4117 39.9933C49.1669 39.9933 49.9028 40.0791 50.6101 40.2408ZM48.4117 41.3683C53.0774 41.3683 56.8652 45.1562 56.8652 49.8224C56.8652 54.488 53.0774 58.2759 48.4117 58.2759C43.7455 58.2759 39.9577 54.488 39.9577 49.8224C39.9577 45.1562 43.7455 41.3683 48.4117 41.3683ZM47.7242 49.1349H43.4403V50.5099H47.7242V54.7933H49.0992V50.5099H53.3826V49.1349H49.0992V44.8509H47.7242V49.1349ZM59.8517 30.6202H54.8935V31.9952H59.8517V30.6202ZM59.8325 20.4023L52.9019 27.3329L53.8743 28.3053L60.8049 21.3747L59.8325 20.4023ZM49.4452 20.8885V25.8468H50.8202V20.8885H49.4452Z" fill="white"/></svg>
                    <h3 class="text-base max-lg:text-sm text-center font-semibold text-[#222222] mb-1">أضف موظفين في نظامك</h3>
                    <p class="text-[#B0BAC0] text-sm text-center max-w-[350px] w-full max-lg:text-xs ">  تابع أداء كل موظف لحظة بلحظة — أضف فريقك وابدأ الشغل بذكاء. </p>
                </div>
                <!-- Card 1 -->
                <div class="  flex flex-col items-center gap-2 ">
                     <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="80" height="80" rx="20" fill="#E9A760"/><path d="M40 50.6875C39.6678 50.6848 39.3397 50.616 39.0358 50.4853C38.732 50.3547 38.4587 50.1648 38.2328 49.9275L33.9062 45.3675C33.5616 44.9915 33.3487 44.5185 33.2983 44.0168C33.2479 43.5151 33.3627 43.0108 33.6259 42.5769C33.8514 42.2202 34.1698 41.9279 34.5486 41.7298C34.9275 41.5317 35.3534 41.4347 35.7831 41.4488H35.8684V40.2019C35.8684 39.8869 35.9968 39.5849 36.2254 39.3622C36.454 39.1395 36.764 39.0144 37.0872 39.0144C37.4104 39.0144 37.7204 39.1395 37.949 39.3622C38.1775 39.5849 38.3059 39.8869 38.3059 40.2019V43.8238H35.7344L40 48.3125L44.2169 43.7525H41.6209V36.4375H38.2938V36.96C38.2938 37.2749 38.1653 37.577 37.9368 37.7997C37.7082 38.0224 37.3982 38.1475 37.075 38.1475C36.7518 38.1475 36.4418 38.0224 36.2132 37.7997C35.9847 37.577 35.8563 37.2749 35.8563 36.96V36.4375C35.8563 35.8076 36.1131 35.2035 36.5702 34.7581C37.0273 34.3127 37.6473 34.0625 38.2938 34.0625H41.6697C42.3162 34.0625 42.9361 34.3127 43.3933 34.7581C43.8504 35.2035 44.1072 35.8076 44.1072 36.4375V41.4844H44.1925C44.6222 41.4703 45.0481 41.5673 45.427 41.7654C45.8059 41.9635 46.1242 42.2558 46.3497 42.6125C46.6077 43.0402 46.7218 43.5359 46.6759 44.0301C46.63 44.5242 46.4264 44.9919 46.0938 45.3675L41.8159 49.9275C41.5845 50.1707 41.3033 50.364 40.9906 50.4949C40.6778 50.6258 40.3404 50.6914 40 50.6875Z" fill="white"/><path d="M24.1562 42.5769C24.1562 41.9211 23.6106 41.3894 22.9375 41.3894C22.2644 41.3894 21.7188 41.9211 21.7188 42.5769V43.7644C21.7188 44.4202 22.2644 44.9519 22.9375 44.9519C23.6106 44.9519 24.1562 44.4202 24.1562 43.7644V42.5769Z" fill="white"/><path d="M54.4178 55.4375H25.5822C25.0748 55.4375 24.5724 55.3401 24.1037 55.151C23.635 54.9618 23.2091 54.6845 22.8503 54.3349C22.4916 53.9854 22.207 53.5704 22.0128 53.1137C21.8187 52.657 21.7188 52.1675 21.7188 51.6731V48.3125C21.7188 47.9976 21.8472 47.6955 22.0757 47.4728C22.3043 47.2501 22.6143 47.125 22.9375 47.125C23.2607 47.125 23.5707 47.2501 23.7993 47.4728C24.0278 47.6955 24.1562 47.9976 24.1562 48.3125V51.6731C24.1562 51.8556 24.1931 52.0362 24.2648 52.2048C24.3365 52.3734 24.4415 52.5265 24.5739 52.6556C24.7063 52.7846 24.8635 52.8869 25.0365 52.9567C25.2095 53.0266 25.3949 53.0625 25.5822 53.0625H54.4178C54.6051 53.0625 54.7905 53.0266 54.9635 52.9567C55.1365 52.8869 55.2937 52.7846 55.4261 52.6556C55.5585 52.5265 55.6635 52.3734 55.7352 52.2048C55.8069 52.0362 55.8438 51.8556 55.8438 51.6731V33.0769C55.8438 32.7084 55.6935 32.355 55.4261 32.0944C55.1587 31.8339 54.796 31.6875 54.4178 31.6875H25.5822C25.204 31.6875 24.8413 31.8339 24.5739 32.0944C24.3065 32.355 24.1562 32.7084 24.1562 33.0769V37.625C24.1562 37.9399 24.0278 38.242 23.7993 38.4647C23.5707 38.6874 23.2607 38.8125 22.9375 38.8125C22.6143 38.8125 22.3043 38.6874 22.0757 38.4647C21.8472 38.242 21.7188 37.9399 21.7188 37.625V33.0769C21.7188 32.0785 22.1258 31.121 22.8503 30.4151C23.5749 29.7091 24.5575 29.3125 25.5822 29.3125H54.4178C55.4425 29.3125 56.4251 29.7091 57.1497 30.4151C57.8742 31.121 58.2812 32.0785 58.2812 33.0769V51.6731C58.2812 52.1675 58.1813 52.657 57.9872 53.1137C57.793 53.5704 57.5084 53.9854 57.1497 54.3349C56.7909 54.6845 56.365 54.9618 55.8963 55.151C55.4276 55.3401 54.9252 55.4375 54.4178 55.4375Z" fill="white"/><path d="M50.9688 24.5625H29.0312C28.3582 24.5625 27.8125 25.0942 27.8125 25.75C27.8125 26.4058 28.3582 26.9375 29.0312 26.9375H50.9688C51.6418 26.9375 52.1875 26.4058 52.1875 25.75C52.1875 25.0942 51.6418 24.5625 50.9688 24.5625Z" fill="white"/></svg>
                    <h3 class="text-base max-lg:text-sm text-center font-semibold text-[#222222] mb-1">حمل التطبيق الان</h3>
                    <p class="text-[#B0BAC0] text-sm text-center max-w-[350px] w-full max-lg:text-xs ">  التجربة الكاملة بين يديك – نزّل التطبيق الآن.حمّل التطبيق الآن وابدأ تجربتك في لحظات! </p>
                </div>
                <!-- Card 1 -->
                <div class="  flex flex-col items-center gap-2 ">
                     <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="80" height="80" rx="20" fill="#434093"/><g clip-path="url(#clip0_975_3016)"><path fill-rule="evenodd" clip-rule="evenodd" d="M46.3238 51.7723C46.1663 52.1433 46.2993 52.4051 46.6458 52.5507L49.8574 53.6357C50.1808 53.7449 50.5315 53.5713 50.6407 53.2486C50.9165 52.4352 49.6495 52.2623 48.5575 51.8934C50.8437 50.6831 52.7925 48.9212 54.2254 46.7869C58.3603 40.6304 57.5854 32.3571 52.2976 27.0693C48.0745 22.8469 41.862 21.4385 36.2879 23.3145C34.6646 23.8612 33.1603 24.6669 31.8275 25.6812C31.5573 25.8877 31.5048 26.2748 31.7113 26.545C31.9178 26.8159 32.3056 26.8677 32.5758 26.6612C33.8036 25.7267 35.1875 24.9854 36.6785 24.4828C37.9294 24.0614 39.2622 23.808 40.6482 23.7499V25.2773C40.6482 25.6189 40.9254 25.8961 41.267 25.8961C41.6086 25.8961 41.8851 25.6189 41.8851 25.2773V23.7506C45.6056 23.9081 48.96 25.481 51.424 27.9443C53.8873 30.4076 55.4602 33.7627 55.6177 37.4832H54.0896C53.748 37.4832 53.4715 37.7597 53.4715 38.1013C53.4715 38.4429 53.748 38.7194 54.0896 38.7194H55.6177C55.5029 41.4466 54.6279 43.9764 53.2013 46.1009C51.872 48.0798 50.0646 49.7101 47.9457 50.8252L48.5477 49.0339C48.8088 48.2632 47.6384 47.8677 47.378 48.6377L46.3238 51.7723ZM41.2831 38.7194H48.1963C48.5372 38.7194 48.8137 38.4422 48.8137 38.1013C48.8137 37.7604 48.5379 37.4825 48.1956 37.4832H41.8851V28.1095C41.8851 27.7679 41.6086 27.4914 41.267 27.4914C40.9254 27.4914 40.6489 27.7686 40.6489 28.1095V38.0852C40.6482 38.4506 40.9184 38.7194 41.2831 38.7194ZM36.136 56.2649C37.5073 57.0433 39.5737 57.8098 41.2369 57.3723C41.5645 57.2855 41.8816 57.1518 42.1945 56.9705L43.955 55.952C44.7964 55.4375 45.0764 54.3469 44.5829 53.4915L41.5876 48.3024C41.085 47.4309 39.9727 47.1334 39.1012 47.6353L36.8808 48.9156C36.6211 49.0661 36.3544 48.9471 36.2046 48.7049L29.6939 37.4293C29.5658 37.2018 29.6428 36.9015 29.8703 36.7713C30.5941 36.3366 31.3536 35.9145 32.0893 35.4896C32.9664 34.9828 33.2695 33.8334 32.7347 32.9675L29.7597 27.812C29.2564 26.9426 28.1427 26.6465 27.2726 27.147L25.5492 28.141C24.9241 28.5029 24.46 28.9712 24.103 29.5991C23.4485 30.752 23.1454 32.1674 23.1335 33.7424C23.1048 37.4797 24.7323 42.1949 27.1725 46.4222C29.6141 50.6509 32.8852 54.4211 36.136 56.2649Z" fill="white"/></g><defs><clipPath id="clip0_975_3016"><rect width="35" height="35" fill="white" transform="translate(22.5 22.5)"/></clipPath></defs></svg>
                    <h3 class="text-base max-lg:text-sm text-center font-semibold text-[#222222] mb-1">تتبع جميع المكالمات</h3>
                    <p class="text-[#B0BAC0] text-sm text-center max-w-[350px] w-full max-lg:text-xs ">  مع نظامنا المتقدم، تتبع جميع المكالمات أصبح أسهل من أي وقت مضى! </p>
                </div>


            </div>

        </div>
    </section>

    <section id="about" class="bg-[#FCFAFE] ">
        <div class="container mx-auto py-12 max-md:my-8 ">
            <!-- Title Section -->
            <h2 class="text-center text-xs bg-[#4340931A] text-[#434093] px-3 py-2 rounded-lg w-fit mx-auto mb-2">
                عن النظام
            </h2>
            <p
                class="text-center text-[30px] max-lg:text-[25px] max-md:text-[20px] max-md:font-[500] font-semibold text-[#212529] mb-12">
                ارفع مستوى تواصلك – حل متكامل لتتبع وتحليل المكالمات باحتراف
            </p>
            <img src="./assets/landing/sec-4-1.png" class="w-full max-h-fit object-contain mx-auto " />
            <!-- Cards Section -->
            <div class="md:border-b-[3px] md:border-b-[#D4D4D42Ed] pb-8 grid grid-cols-1  md:grid-cols-3 gap-[20px] md:gap-[50px] ">
                <!-- Card 1 -->
                <div class="md:border-b-[5px] md:border-b-[#434093] md:-mb-9 ">
                    <h3 class=" max-md:text-center text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> تحكّم كامل في جميع <span class="text-[#434093]" >المكالمات</span> </h3>
                    <p class=" max-md:text-center text-balance text-[#B0BAC0] text-sm  max-lg:text-xs "> كل مكالمة، صادرة أو واردة، مسجّلة ومنظّمة – تقدر تراجعها، تشاركها، وتعرف مكانها بدقة.</p>
                </div>
                <!-- Card 1 -->
                <div class="">
                    <h3 class=" max-md:text-center text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> نظامك الذكي لمتابعة <span class="text-[#434093]" >أداء الفريق</span>   </h3>
                    <p class=" max-md:text-center text-balance text-[#B0BAC0] text-sm  max-lg:text-xs "> خلّيك في الصورة وراقب أداء فريقك لحظة بلحظة، تابع، قيّم، وطور جودة التواصل بكل سهولة.</p>
                </div>
                <!-- Card 1 -->
                <div class="">
                    <h3 class=" max-md:text-center text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> حماية قصوى لبياناتك <span class="text-[#434093]" >ومكالماتك</span> </h3>
                    <p class=" max-md:text-center text-balance text-[#B0BAC0] text-sm  max-lg:text-xs "> كل المكالمات والبيانات محفوظة بتشفير قوي، خصوصيتك في أمان.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-[#FCFAFE] relative md:py-16 py-8 ">
        <div class="w-full absolute h-1/2 top-0 left-0  "
            style="background: linear-gradient(164.67deg, #0D121F 2.65%, #434093 108.51%);"></div>
        <div class="container relative py-12 max-md:my-8 ">
            <!-- Title Section -->
            <h2 class="text-center text-xs bg-[#FFFFFF0A] text-white px-3 py-2 rounded-lg w-fit mx-auto mb-2">
                خدمات التطبيق
            </h2>
            <p style="background: linear-gradient(270.03deg, #B4AEF1 0.32%, #EFA752 106.27%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;text-fill-color: transparent;"
                class="text-center text-[30px] max-lg:text-[25px] max-md:text-[20px] max-md:font-[500] font-semibold mb-12">
                تميّزك يبدأ معنا – اكتشف السبب!
            </p>


            <!-- Cards Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 max-xl:gap-4 gap-8">
                <!-- Card 1 -->
                <div class=" flex flex-col justify-between px-6 rounded-2xl "
                    style="background: linear-gradient(299.55deg, #F3F2FF 33.13%, #F7F7F7 81.04%);">
                    <div class="">
                        <h3 class=" pt-6 my-2 text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗 تتبع
                            المكالمات بسهولة </h3>
                        <p class=" pt-1 pb-3 text-[#B0BAC0] text-sm max-lg:text-xs "> راقب المكالمات الصادرة والواردة،
                            وأضف تعليقات أو ملاحظات لكل تواصل – كل التفاصيل في مكان واحد. </p>
                    </div>
                    <img src="./assets/landing/sec-5-1.png" alt="" class="w-full object-cover" />
                </div>
                <!-- Card 1 -->
                <div class=" flex flex-col justify-between px-6 rounded-2xl "
                    style="background: linear-gradient(299.55deg, #F3F2FF 33.13%, #F7F7F7 81.04%);">
                    <img src="./assets/landing/sec-5-2.png" alt="" class="w-full object-cover" />
                    <div class="">
                        <h3 class="my-2 text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗 كل الأرقام اللي
                            تهمك… قدامك في لحظة </h3>
                        <p class=" pt-1 pb-3 text-[#B0BAC0] text-sm max-lg:text-xs "> من تتبع المكالمات إلى ساعات العمل
                            وتحليل الأداء – كل الأرقام اللي تهمك قدامك بشكل لحظي </p>
                    </div>
                </div>
                <!-- Card 1 -->
                <div class=" flex flex-col justify-between px-6 rounded-2xl "
                    style="background: linear-gradient(299.55deg, #F3F2FF 33.13%, #F7F7F7 81.04%);">
                    <div class="">
                        <h3 class=" pt-6 my-2 text-base max-lg:text-sm font-semibold text-[#222222] mb-1"> 🔗 كل يوم
                            محسوب… وجدولك منظم </h3>
                        <p class=" pt-1 pb-3 text-[#B0BAC0] text-sm max-lg:text-xs "> تابع الحضور والانصراف بدقة، واعرض
                            أوقات الدوام اليومية بكل سهولة. </p>
                    </div>
                    <img src="./assets/landing/sec-5-3.png" alt="" class="w-full object-cover" />
                </div>


            </div>
        </div>
    </section>
    <section class="bg-[#FCFAFE] relative md:py-16 py-8 ">
        <!-- Title Section -->
        <h2 class="text-center text-xs bg-[#4340931A] text-[#434093] px-3 py-2 rounded-lg w-fit mx-auto mb-2">
            تواصل معانا
        </h2>
        <p class="text-center text-[30px] max-lg:text-[25px] max-md:text-[20px] max-md:font-[500] font-semibold mb-12">
            نوفّر لك الحل الأسرع والأدق.
        </p>

        <div class=" container grid grid-cols-[1fr,420px] max-md:grid-cols-1 items-center gap-16">
            <img class="max-w-[600px] mx-auto w-full max-md:hidden " src="./assets/landing/sec-6-1.png" />
            <div class=" h-fit relative w-full ">
                <img class=" w-full rotate-[4deg] " src="./assets/landing/sec-6-2.png" />
                <form action="#" class=" w-[70%] absolute top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2  "
                    method="POST">
                    <div class="input-group max-md:!-mt-[20px] max-md:!mb-2 ">
                        <label for="company_name" class="input-label max-md:!mb-0">اسم الشركة</label>
                        <input type="text" id="company_name" placeholder="" name="company_name"
                            class="input-field !border-[#4754672E] " required>
                    </div>

                    <div class="input-group max-md:!mb-2 ">
                        <label for="email" class="input-label max-md:!mb-0">البريد
                            الإلكتروني</label>
                        <input type="email" id="email" name="email" value=""
                            class="input-field !border-[#4754672E] " required>
                    </div>

                    <div class="input-group max-md:!mb-2 ">
                        <label for="phone_number" class="input-label max-md:!mb-0">رقم الجوال</label>
                        <input type="text" id="phone_number" name="phone_number" value=""
                            class="input-field !border-[#4754672E] " required>
                    </div>

                    <button type="submit" class=" btn max-md:!mt-2 h-[40px] !py-0 ">جربه
                        الآن</button>
                </form>
            </div>
        </div>
    </section>

    <div class=" md:!pt-12 " style="background: linear-gradient(164.67deg, #0D121F 2.65%, #434093 108.51%);">
        <!-- Title Section -->
        <section id="pricing">
            <h2 class="text-center text-xs bg-[#FFFFFF0A] text-white px-3 py-2 rounded-lg w-fit mx-auto mb-2">
                باقات الاسعار
            </h2>
            <p style="background: linear-gradient(270.03deg, #B4AEF1 0.32%, #EFA752 106.27%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;text-fill-color: transparent;"
                class="text-center text-[30px] max-lg:text-[25px] max-md:text-[20px] max-md:font-[500] font-semibold">
                ابدأ رحلتك معنا بالخطة اللي تناسب احتياجك!
            </p>

            <div class=" mt-4 flex items-center relative gap-3 text-white justify-between  w-fit mx-auto pb-4">
                <span class="text-sm"> اشترك سنوي</span>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="KEY_" class=" hidden sr-only peer" checked>
                    <div
                        class="w-11 before:!hidden h-6 bg-[#FFFFFF52] rounded-full peer peer-checked:bg-[#434093] transition-all duration-300">
                    </div>
                    <div
                        class="absolute  left-0.5 top-0.5 bg-white w-5 h-5 rounded-full shadow-md transform peer-checked:translate-x-5 transition-transform duration-300">
                    </div>
                </label>
                <span class="text-sm"> اشترك شهري</span>

                <div
                    class=" max-sm:right-0 max-sm:translate-x-[150px] duration-500 max-sm:top-[20px] max-sm:rotate-[20deg]  max-md:scale-[.6] origin-top-left text-[#434093] absolute translate-x-[110%] max-md:-top-[10px] -top-[20px] right-0  flex items-end justify-center gap-2 ">
                    وفر 25%
                    <svg width="107" height="88" viewBox="0 0 107 88" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M95.9463 61.856C83.6573 64.9197 68.9838 65.5018 58.1839 57.7645C51.282 52.8199 47.6171 42.8213 50.1964 34.7057C52.6324 27.0411 58.3212 20.3067 66.8457 20.512C71.289 20.619 75.1201 22.6633 75.929 27.3426C77.1648 34.4914 70.0331 41.8894 64.3629 44.999C46.6672 54.7037 21.6341 54.1637 4.77686 42.8992"
                            stroke="#434093" stroke-width="3" stroke-linecap="round" />
                        <path d="M12.2067 56.103C10.1448 53.2217 5.64204 46.5001 4.12678 42.6637" stroke="#434093"
                            stroke-width="3" stroke-linecap="round" />
                        <path d="M4.12688 42.6641C7.63953 42.2006 15.6239 40.8948 19.4603 39.3795" stroke="#434093"
                            stroke-width="3" stroke-linecap="round" />
                    </svg>
                </div>
            </div>

            <div class="container mx-auto">
                <div
                    class="relative z-10 mt-[100px] md:mt-[180px] max-md:py-[20px] max-md:px-[20px] md:px-[100px] sm:bg-[#FFFFFF0A] sm:backdrop-blur-md rounded-3xl  w-fit mx-auto grid sm:grid-cols-2  gap-[40px] ">
                    <!-- Left Section (50 ر.س) - Current Plan -->
                    <div
                        class="flex-none  md:translate-y-[-80px]  max-w-[280px] w-full bg-gradient-to-t to-[#434093] from-[#2A285E] dark:to-[#2e2b6d] dark:from-[#1e1d4d] p-6 rounded-3xl text-white space-y-4 relative">
                        <div
                            class="absolute top-10 rtl:-left-2 ltr:-right-2 bg-[#E59C3B8C] dark:bg-[#E59C3B66] border border-dashed border-[#E9A760] text-[#E59C3B] dark:text-[#F0B04D] px-3 py-1 ltr:rounded-[5px_0_0_5px] rtl:rounded-[0_5px_5px_0] text-sm">
                            الاكثر طلبا
                        </div>
                        <div class="absolute scale-[1.5] top-[55px] rtl:-left-[7px] ltr:-right-[7px]">
                            <svg class="ltr:scale-x-[-1]" width="6" height="6" viewBox="0 0 6 6"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 6V0H0L6 6Z" fill="#CE8625" />
                            </svg>
                        </div>

                        <h2 class="flex !mt-0 items-center gap-2 text-3xl font-bold">
                            50 <img src="assets/icons/currency.svg" />
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
                            class="w-full py-2 !mt-8 hover:bg-opacity-90 duration-300 bg-white rounded-full text-[#434093] dark:text-[#2e2b6d] font-[600]">
                            أشترك الان
                        </button>
                    </div>

                    <!-- Right Section (50 ر.س) - New Plan -->
                    <div
                        class="max-sm:bg-[#FFFFFF0A] max-sm:backdrop-blur-md flex-none  max-w-[280px] w-full  p-6 rounded-3xl text-white space-y-4 relative">
                        <h2 class="flex items-center gap-2 text-3xl font-bold">
                            50 <img src="assets/icons/currency.svg" class=" " />
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
                                    <img src="assets/icons/check.svg" class=" " />
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>

                        <button
                            class="w-full py-2 !mt-8 z-10 duration-300 !bg-gradient-to-l text-white from-[#B4AEF0] to-[#E9A861] dark:from-[#7A72C4] dark:to-[#D9984E] rounded-full font-[600]">
                            أشترك الان
                        </button>
                    </div>
                </div>
            </div>

            <style>
                .my-multi-row-swiper {
                    height: auto !important;
                    margin: 20px 0 !important;
                }
            </style>
            <div class="container mx-auto md:py-12 py-8 ">
                <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
                <div class="swiper my-multi-row-swiper">
                    <div class="swiper-wrapper">
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> تسجيل
                                المكالمات ومراقبتها</span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> متابعة
                                الأداء اليومي</span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> تنظيم فريق
                                العمل بفعالية</span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> تطبيق
                                متكامل لنظامي الاندرويد و الايفون</span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> لوحة تحكم
                                ذكية</span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> عرض سجل
                                المكالمات بالكامل</span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> التقارير
                                والتحليلات</span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> تتبع
                                مكالمات الواتساب</span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> تسجيل
                                المكالمات ومراقبتها</span> </div>
                    </div>
                </div>
                <div class="swiper my-multi-row-swiper">
                    <div class="swiper-wrapper">
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> متابعة
                                الأداء اليومي </span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> إدارة
                                الموظفين </span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> تنظيم فريق
                                العمل بفعالية </span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> تطبيق
                                متكامل لنظامي الاندرويد و الايفون </span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> لوحة تحكم
                                ذكية </span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> عرض سجل
                                المكالمات بالكامل </span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> التقارير
                                والتحليلات </span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> تتبع
                                مكالمات الواتساب </span> </div>
                        <div
                            class=" !font-[400] !w-fit !px-4 !bg-[#FFFFFF0A] backdrop-blur-md swiper-slide text-white flex items-center gap-2 !py-2 !rounded-full !text-sm ">
                            <img src="./assets/icons/check.png" alt="" class="w-[30px] " /> <span> إدارة
                                الموظفين </span> </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="px-[20px]"  >
            <div class="!px-4 md:!px-8 bg-white rounded-[50px_50px_0_0] container  py-[30px] shadow-inner text-center" style="background: linear-gradient(90deg, rgba(68, 255, 154, 0.05) -0.55%, rgba(68, 176, 255, 0.05) 22.86%, rgba(139, 68, 255, 0.05) 48.36%, rgba(255, 102, 68, 0.05) 73.33%, rgba(235, 255, 112, 0.05) 99.34%); background-color: #FFFFFF">
                <div class="flex flex-col items-center">
                    <!-- Logo/Platform Name -->
                    
                    <div class="flex w-full max-sm:flex-col max-sm:gap-2 items-center justify-between" >
                        <img src="./assets/logo.png" class="w-[150px] object-contain " />
                        <ul class="flex items-center gap-2" >
                            <svg class="duration-300 hover:scale-[1.2] cursor-pointer " width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.2666 0.758789C25.0632 0.758789 26.9613 0.759205 28.4062 1.50977C29.6239 2.14227 30.6165 3.13492 31.249 4.35254C31.9996 5.79746 32 7.69561 32 11.4922V22.0254C32 25.822 31.9996 27.7201 31.249 29.165C30.6165 30.3827 29.6239 31.3753 28.4062 32.0078C26.9613 32.7584 25.0632 32.7588 21.2666 32.7588H18.667V21.2031H22.2227L22.9336 16.7588H18.667V13.6475C18.667 12.4031 19.1119 11.4258 21.0674 11.4258H23.1113V7.33691C21.956 7.15918 20.712 6.98149 19.5566 6.98145C15.9122 6.98145 13.334 9.20316 13.334 13.2031V16.7588H9.33398V21.2031H13.334V32.7588H10.7334C6.93682 32.7588 5.03867 32.7584 3.59375 32.0078C2.37613 31.3753 1.38348 30.3827 0.750977 29.165C0.000415857 27.7201 0 25.822 0 22.0254V11.4922C0 7.69561 0.000415207 5.79746 0.750977 4.35254C1.38348 3.13492 2.37613 2.14227 3.59375 1.50977C5.03867 0.759204 6.93682 0.758789 10.7334 0.758789H21.2666Z" fill="#434093"/></svg>
                            <svg class="duration-300 hover:scale-[1.2] cursor-pointer " width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_425_1965)"><path d="M21.2842 0.758789C25.0808 0.758789 26.9789 0.759205 28.4238 1.50977C29.6414 2.14227 30.6341 3.13492 31.2666 4.35254C32.0172 5.79746 32.0176 7.69561 32.0176 11.4922V22.0254C32.0176 25.822 32.0172 27.7201 31.2666 29.165C30.6341 30.3827 29.6414 31.3753 28.4238 32.0078C26.9789 32.7584 25.0808 32.7588 21.2842 32.7588H10.751C6.9544 32.7588 5.05625 32.7584 3.61133 32.0078C2.39371 31.3753 1.40106 30.3827 0.768555 29.165C0.017994 27.7201 0.0175781 25.822 0.0175781 22.0254V11.4922C0.0175781 7.69561 0.0179933 5.79746 0.768555 4.35254C1.40106 3.13492 2.39371 2.14227 3.61133 1.50977C5.05625 0.759204 6.9544 0.758789 10.751 0.758789H21.2842ZM15.998 5.12305C12.8399 5.12305 12.443 5.13591 11.2021 5.19238C9.96349 5.24912 9.11775 5.44565 8.37793 5.7334C7.61282 6.03056 6.964 6.42839 6.31738 7.0752C5.67013 7.72198 5.27181 8.37163 4.97363 9.13672C4.68524 9.87675 4.48934 10.7229 4.43359 11.9609C4.37809 13.2019 4.36328 13.5989 4.36328 16.7588C4.36328 19.9189 4.37736 20.3145 4.43359 21.5557C4.49056 22.7945 4.6871 23.64 4.97461 24.3799C5.27205 25.1452 5.66941 25.7946 6.31641 26.4414C6.96289 27.0886 7.61218 27.487 8.37695 27.7842C9.11723 28.0719 9.96284 28.2685 11.2012 28.3252C12.4423 28.3817 12.8391 28.3955 15.999 28.3955C19.1592 28.3955 19.5548 28.3817 20.7959 28.3252C22.0345 28.2685 22.8808 28.0719 23.6211 27.7842C24.3862 27.487 25.0351 27.0887 25.6816 26.4414C26.3288 25.7947 26.7263 25.1449 27.0244 24.3799C27.3104 23.6399 27.5063 22.7937 27.5645 21.5557C27.6202 20.3147 27.6348 19.9187 27.6348 16.7588C27.6348 13.5987 27.6202 13.2021 27.5645 11.9609C27.5063 10.7222 27.3104 9.87656 27.0244 9.13672C26.7263 8.37146 26.3288 7.72192 25.6816 7.0752C25.0345 6.42803 24.387 6.03035 23.6211 5.7334C22.8793 5.44564 22.0327 5.24911 20.7939 5.19238C19.5531 5.13591 19.1577 5.12305 15.998 5.12305ZM14.9561 7.21973C15.2658 7.21924 15.6118 7.21973 16 7.21973C19.1068 7.21973 19.4753 7.23038 20.7021 7.28613C21.8365 7.33801 22.4521 7.52824 22.8623 7.6875C23.4053 7.89841 23.7932 8.15034 24.2002 8.55762C24.6072 8.96474 24.859 9.35271 25.0703 9.89551C25.2296 10.3052 25.42 10.9211 25.4717 12.0557C25.5274 13.2823 25.5391 13.6508 25.5391 16.7559C25.5391 19.8613 25.5274 20.2304 25.4717 21.457C25.4198 22.5915 25.2296 23.2075 25.0703 23.6172C24.8595 24.1598 24.6071 24.5463 24.2002 24.9531C23.7929 25.3604 23.4056 25.6133 22.8623 25.8242C22.4526 25.9842 21.8363 26.1727 20.7021 26.2246C19.4755 26.2804 19.1068 26.293 16 26.293C12.8936 26.293 12.525 26.2803 11.2988 26.2246C10.1643 26.1722 9.54811 25.9825 9.1377 25.8232C8.59476 25.6123 8.20703 25.3604 7.7998 24.9531C7.39261 24.5459 7.14008 24.1594 6.92871 23.6162C6.76945 23.2065 6.57997 22.5905 6.52832 21.4561C6.47256 20.2294 6.46094 19.8603 6.46094 16.7529C6.46094 13.6459 6.47257 13.2793 6.52832 12.0527C6.58019 10.9185 6.76947 10.3028 6.92871 9.89258C7.13961 9.34955 7.39254 8.96098 7.7998 8.55371C8.20693 8.14665 8.59487 7.89493 9.1377 7.68359C9.54786 7.52359 10.1643 7.33435 11.2988 7.28223C12.3718 7.23376 12.788 7.21922 14.9561 7.2168V7.21973ZM15.6924 10.791C12.5355 10.9513 10.0245 13.562 10.0244 16.7588C10.0244 20.0588 12.7001 22.7333 16 22.7334C19.3 22.7334 21.9746 20.0589 21.9746 16.7588C21.9745 13.4587 19.3 10.7832 16 10.7832L15.6924 10.791ZM16 12.8799C18.142 12.8799 19.8788 14.6165 19.8789 16.7588C19.8789 18.9009 18.142 20.6377 16 20.6377C13.8579 20.6376 12.1221 18.9008 12.1221 16.7588C12.1221 14.6166 13.8579 12.88 16 12.8799ZM22.0684 9.15918C21.3647 9.23083 20.8154 9.82504 20.8154 10.5479C20.8156 11.3186 21.4411 11.9443 22.2119 11.9443C22.9825 11.9441 23.6072 11.3185 23.6074 10.5479C23.6074 9.77709 22.9826 9.15161 22.2119 9.15137L22.0684 9.15918Z" fill="url(#paint0_radial_425_1965)"/><path d="M21.2842 0.758789C25.0808 0.758789 26.9789 0.759205 28.4238 1.50977C29.6414 2.14227 30.6341 3.13492 31.2666 4.35254C32.0172 5.79746 32.0176 7.69561 32.0176 11.4922V22.0254C32.0176 25.822 32.0172 27.7201 31.2666 29.165C30.6341 30.3827 29.6414 31.3753 28.4238 32.0078C26.9789 32.7584 25.0808 32.7588 21.2842 32.7588H10.751C6.9544 32.7588 5.05625 32.7584 3.61133 32.0078C2.39371 31.3753 1.40106 30.3827 0.768555 29.165C0.017994 27.7201 0.0175781 25.822 0.0175781 22.0254V11.4922C0.0175781 7.69561 0.0179933 5.79746 0.768555 4.35254C1.40106 3.13492 2.39371 2.14227 3.61133 1.50977C5.05625 0.759204 6.9544 0.758789 10.751 0.758789H21.2842ZM15.998 5.12305C12.8399 5.12305 12.443 5.13591 11.2021 5.19238C9.96349 5.24912 9.11775 5.44565 8.37793 5.7334C7.61282 6.03056 6.964 6.42839 6.31738 7.0752C5.67013 7.72198 5.27181 8.37163 4.97363 9.13672C4.68524 9.87675 4.48934 10.7229 4.43359 11.9609C4.37809 13.2019 4.36328 13.5989 4.36328 16.7588C4.36328 19.9189 4.37736 20.3145 4.43359 21.5557C4.49056 22.7945 4.6871 23.64 4.97461 24.3799C5.27205 25.1452 5.66941 25.7946 6.31641 26.4414C6.96289 27.0886 7.61218 27.487 8.37695 27.7842C9.11723 28.0719 9.96284 28.2685 11.2012 28.3252C12.4423 28.3817 12.8391 28.3955 15.999 28.3955C19.1592 28.3955 19.5548 28.3817 20.7959 28.3252C22.0345 28.2685 22.8808 28.0719 23.6211 27.7842C24.3862 27.487 25.0351 27.0887 25.6816 26.4414C26.3288 25.7947 26.7263 25.1449 27.0244 24.3799C27.3104 23.6399 27.5063 22.7937 27.5645 21.5557C27.6202 20.3147 27.6348 19.9187 27.6348 16.7588C27.6348 13.5987 27.6202 13.2021 27.5645 11.9609C27.5063 10.7222 27.3104 9.87656 27.0244 9.13672C26.7263 8.37146 26.3288 7.72192 25.6816 7.0752C25.0345 6.42803 24.387 6.03035 23.6211 5.7334C22.8793 5.44564 22.0327 5.24911 20.7939 5.19238C19.5531 5.13591 19.1577 5.12305 15.998 5.12305ZM14.9561 7.21973C15.2658 7.21924 15.6118 7.21973 16 7.21973C19.1068 7.21973 19.4753 7.23038 20.7021 7.28613C21.8365 7.33801 22.4521 7.52824 22.8623 7.6875C23.4053 7.89841 23.7932 8.15034 24.2002 8.55762C24.6072 8.96474 24.859 9.35271 25.0703 9.89551C25.2296 10.3052 25.42 10.9211 25.4717 12.0557C25.5274 13.2823 25.5391 13.6508 25.5391 16.7559C25.5391 19.8613 25.5274 20.2304 25.4717 21.457C25.4198 22.5915 25.2296 23.2075 25.0703 23.6172C24.8595 24.1598 24.6071 24.5463 24.2002 24.9531C23.7929 25.3604 23.4056 25.6133 22.8623 25.8242C22.4526 25.9842 21.8363 26.1727 20.7021 26.2246C19.4755 26.2804 19.1068 26.293 16 26.293C12.8936 26.293 12.525 26.2803 11.2988 26.2246C10.1643 26.1722 9.54811 25.9825 9.1377 25.8232C8.59476 25.6123 8.20703 25.3604 7.7998 24.9531C7.39261 24.5459 7.14008 24.1594 6.92871 23.6162C6.76945 23.2065 6.57997 22.5905 6.52832 21.4561C6.47256 20.2294 6.46094 19.8603 6.46094 16.7529C6.46094 13.6459 6.47257 13.2793 6.52832 12.0527C6.58019 10.9185 6.76947 10.3028 6.92871 9.89258C7.13961 9.34955 7.39254 8.96098 7.7998 8.55371C8.20693 8.14665 8.59487 7.89493 9.1377 7.68359C9.54786 7.52359 10.1643 7.33435 11.2988 7.28223C12.3718 7.23376 12.788 7.21922 14.9561 7.2168V7.21973ZM15.6924 10.791C12.5355 10.9513 10.0245 13.562 10.0244 16.7588C10.0244 20.0588 12.7001 22.7333 16 22.7334C19.3 22.7334 21.9746 20.0589 21.9746 16.7588C21.9745 13.4587 19.3 10.7832 16 10.7832L15.6924 10.791ZM16 12.8799C18.142 12.8799 19.8788 14.6165 19.8789 16.7588C19.8789 18.9009 18.142 20.6377 16 20.6377C13.8579 20.6376 12.1221 18.9008 12.1221 16.7588C12.1221 14.6166 13.8579 12.88 16 12.8799ZM22.0684 9.15918C21.3647 9.23083 20.8154 9.82504 20.8154 10.5479C20.8156 11.3186 21.4411 11.9443 22.2119 11.9443C22.9825 11.9441 23.6072 11.3185 23.6074 10.5479C23.6074 9.77709 22.9826 9.15161 22.2119 9.15137L22.0684 9.15918Z" fill="#434093"/></g><defs><radialGradient id="paint0_radial_425_1965" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(8.51762 35.2235) rotate(-90) scale(31.7144 29.4969)"><stop stop-color="#FFDD55"/><stop offset="0.1" stop-color="#FFDD55"/><stop offset="0.5" stop-color="#FF543E"/><stop offset="1" stop-color="#C837AB"/></radialGradient><clipPath id="clip0_425_1965"><rect width="32" height="32" fill="white" transform="translate(0 0.758789)"/></clipPath></defs></svg>
                            <svg class="duration-300 hover:scale-[1.2] cursor-pointer " width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.2666 0.758789C25.0632 0.758789 26.9613 0.759205 28.4062 1.50977C29.6239 2.14227 30.6165 3.13492 31.249 4.35254C31.9996 5.79746 32 7.69561 32 11.4922V22.0254C32 25.822 31.9996 27.7201 31.249 29.165C30.6165 30.3827 29.6239 31.3753 28.4062 32.0078C26.9613 32.7584 25.0632 32.7588 21.2666 32.7588H10.7334C6.93682 32.7588 5.03867 32.7584 3.59375 32.0078C2.37613 31.3753 1.38348 30.3827 0.750977 29.165C0.000415857 27.7201 0 25.822 0 22.0254V11.4922C0 7.69561 0.000415207 5.79746 0.750977 4.35254C1.38348 3.13492 2.37613 2.14227 3.59375 1.50977C5.03867 0.759204 6.93682 0.758789 10.7334 0.758789H21.2666ZM20.6406 8.33594C18.2997 8.33603 16.4024 10.3892 16.4023 12.9238C16.4023 13.2781 16.4394 13.6326 16.5117 13.9688C12.9899 13.778 9.86593 11.9517 7.77637 9.17188C7.40945 9.85324 7.20117 10.6437 7.20117 11.4795C7.20122 13.0692 7.94935 14.477 9.08789 15.3037C8.39281 15.2765 7.73793 15.0676 7.16602 14.7314V14.7861C7.16602 17.0119 8.62789 18.8652 10.5684 19.2832C10.2101 19.3922 9.83615 19.4473 9.45117 19.4473C9.17831 19.4473 8.91145 19.4197 8.65234 19.3652C9.19246 21.182 10.758 22.5176 12.6123 22.5449C11.1619 23.7804 9.33293 24.5166 7.34766 24.5166C7.00592 24.5166 6.6693 24.4894 6.33789 24.4531C8.21378 25.7521 10.4406 26.5146 12.835 26.5146C20.6296 26.5145 24.8925 19.5195 24.8926 13.46C24.8926 13.2601 24.8896 13.0602 24.8818 12.8604C25.7096 12.2153 26.4268 11.4068 26.9961 10.4893C26.2373 10.8527 25.4184 11.098 24.5605 11.207C25.4374 10.6438 26.1089 9.7439 26.4268 8.67188C25.6069 9.19871 24.7005 9.58038 23.7334 9.78027C22.9608 8.88995 21.8594 8.33594 20.6406 8.33594Z" fill="#434093"/></svg>
                            <svg class="duration-300 hover:scale-[1.2] cursor-pointer " width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_425_1973)"><path d="M21.2666 0.758789C25.0632 0.758789 26.9613 0.759205 28.4062 1.50977C29.6239 2.14227 30.6165 3.13492 31.249 4.35254C31.9996 5.79746 32 7.69561 32 11.4922V22.0254C32 25.822 31.9996 27.7201 31.249 29.165C30.6165 30.3827 29.6239 31.3753 28.4062 32.0078C26.9613 32.7584 25.0632 32.7588 21.2666 32.7588H10.7334C6.93682 32.7588 5.03867 32.7584 3.59375 32.0078C2.37613 31.3753 1.38348 30.3827 0.750977 29.165C0.000415857 27.7201 0 25.822 0 22.0254V11.4922C0 7.69561 0.000415207 5.79746 0.750977 4.35254C1.38348 3.13492 2.37613 2.14227 3.59375 1.50977C5.03867 0.759204 6.93682 0.758789 10.7334 0.758789H21.2666ZM25.8262 9.80078C26.162 8.45421 25.3134 7.84397 24.4336 8.24316L5.16797 15.6738C3.85313 16.2014 3.86046 16.9347 4.92773 17.2617L9.73242 18.7607L11.5713 24.3975C11.7947 25.0142 11.6847 25.2587 12.332 25.2588C12.832 25.2588 13.0546 25.0318 13.333 24.7598C13.5101 24.5865 14.5615 23.5642 15.7354 22.4229L20.7334 26.1152C21.6529 26.6224 22.3169 26.3593 22.5459 25.2607L25.8262 9.80078ZM21.3174 11.584C21.858 11.2562 22.3531 11.4317 21.9463 11.793L12.6729 20.1602L12.3115 24.0117L10.4873 18.417L21.3174 11.584Z" fill="#434093"/></g><defs><clipPath id="clip0_425_1973"><rect width="32" height="32" fill="white" transform="translate(0 0.758789)"/></clipPath></defs></svg>
                            <svg class="duration-300 hover:scale-[1.2] cursor-pointer " width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.2666 0.758789C25.0632 0.758789 26.9613 0.759205 28.4062 1.50977C29.6239 2.14227 30.6165 3.13492 31.249 4.35254C31.9996 5.79746 32 7.69561 32 11.4922V22.0254C32 25.822 31.9996 27.7201 31.249 29.165C30.6165 30.3827 29.6239 31.3753 28.4062 32.0078C26.9613 32.7584 25.0632 32.7588 21.2666 32.7588H10.7334C6.93682 32.7588 5.03867 32.7584 3.59375 32.0078C2.37613 31.3753 1.38348 30.3827 0.750977 29.165C0.000415857 27.7201 0 25.822 0 22.0254V11.4922C0 7.69561 0.000415207 5.79746 0.750977 4.35254C1.38348 3.13492 2.37613 2.14227 3.59375 1.50977C5.03867 0.759204 6.93682 0.758789 10.7334 0.758789H21.2666ZM16.3594 5.13965C10.082 5.1399 4.97323 10.2462 4.9707 16.5225C4.96988 18.5289 5.49453 20.4875 6.49121 22.2139L4.875 28.1123L10.9131 26.5293C12.5765 27.4361 14.4494 27.9144 16.3555 27.915H16.3604C22.6371 27.9149 27.7464 22.8077 27.749 16.5312C27.7501 13.4898 26.5662 10.6301 24.416 8.47852C22.4001 6.46132 19.7611 5.29253 16.9287 5.15332L16.3594 5.13965ZM16.3633 7.0625C18.8917 7.06332 21.2693 8.04842 23.0566 9.83691C24.8438 11.6253 25.8272 14.0032 25.8262 16.5312C25.8239 21.748 21.5776 25.992 16.3604 25.9922H16.3564C14.6578 25.9915 12.9915 25.5359 11.5381 24.6738L11.1924 24.4688L7.60938 25.4082L8.56543 21.916L8.34082 21.5586C7.39328 20.0523 6.8929 18.3112 6.89355 16.5234C6.89564 11.3069 11.1419 7.06274 16.3633 7.0625ZM12.3281 11.2656C12.1384 11.2656 11.8292 11.3363 11.5684 11.6211C11.3075 11.9058 10.5733 12.5943 10.5732 13.9941C10.5732 15.3934 11.5911 16.7454 11.7344 16.9365C11.8767 17.1264 13.742 19.9993 16.5967 21.2314C17.2755 21.5245 17.8055 21.7 18.2188 21.8311C18.9003 22.0474 19.5205 22.0166 20.0107 21.9434C20.5575 21.8617 21.6945 21.2551 21.9316 20.5908C22.1687 19.9264 22.1688 19.3569 22.0977 19.2383C22.0265 19.1197 21.837 19.0485 21.5527 18.9062C21.2682 18.7639 19.8683 18.0755 19.6074 17.9805C19.3469 17.8858 19.1573 17.8388 18.9678 18.123C18.7781 18.4077 18.2326 19.0483 18.0664 19.2383C17.9005 19.4281 17.7346 19.4519 17.4502 19.3096C17.1656 19.1672 16.2481 18.8665 15.1611 17.8975C14.3155 17.1434 13.7442 16.2126 13.5781 15.9277C13.4122 15.643 13.5607 15.4885 13.7031 15.3467C13.8311 15.2192 13.9877 15.0146 14.1299 14.8486C14.2721 14.6826 14.3192 14.5637 14.4141 14.374C14.5089 14.1842 14.4617 14.0184 14.3906 13.876C14.3195 13.7335 13.7508 12.3332 13.5137 11.7637C13.2826 11.2091 13.0477 11.2842 12.873 11.2754C12.7074 11.2672 12.5177 11.2656 12.3281 11.2656Z" fill="#434093"/></svg>

                        </ul>
                    </div>
                    <span class="h-[2px] w-full block bg-[#E9E9E9] my-[25px] " ></span>
    
                    <!-- Copyright Text -->
                    <div class="text-[#7C8496]">
                        <p class="text-sm">
                            جميع الحقوق محفوظة لدى منصتنا © 2025
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </div>






    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        new Swiper('.my-multi-row-swiper', {
            loop: true,
            freeMode: true,
            speed: 5000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            spaceBetween: 16,
            // Adjust slides per view for better display
            breakpoints: {
                640: {
                    slidesPerView: 3
                },
                768: {
                    slidesPerView: 4
                },
                1024: {
                    slidesPerView: 5
                }
            }
        });
    </script>

    <style>
        /* Custom styling for 2-row layout */
        .my-multi-row-swiper {
            height: 200px;
            /* Adjust based on your content */
        }

        .my-multi-row-swiper .swiper-slide {
            height: calc(50% - 8px);
            /* Half height minus half space */
            display: flex;
            align-items: center;
            justify-content: center;
            background: #334155;
            border-radius: 8px;
            color: white;
            font-weight: bold;
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburger = document.querySelector('.hamburger');
            const navbar = document.getElementById('navbar');

            // Add white background when scrolling
            function handleScroll() {
                if (window.scrollY > 100) {
                    navbar.classList.add('backdrop-blur-sm');
                    navbar.classList.remove('bg-transparent');
                } else {
                    navbar.classList.remove('backdrop-blur-sm');
                    navbar.classList.add('bg-transparent');
                }
            }
            // Smooth underline animation for desktop
            function updateActiveLink() {
                const scrollPosition = window.scrollY + 150;

                document.querySelectorAll('section').forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');

                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        // Remove active class from all links
                        navLinks.forEach(link => {
                            link.classList.remove('active', 'text-[#434093]', 'font-semibold');
                            link.parentElement.classList.remove('active');
                        });

                        // Add active class to corresponding link
                        const activeLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
                        if (activeLink) {
                            activeLink.classList.add('active', 'text-[#434093]', 'font-semibold');
                            activeLink.parentElement.classList.add('active');
                        }
                    }
                });
            }

            // Mobile menu toggle
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('open');
                hamburger.classList.toggle('open');
            });

            // Close mobile menu when clicking a link
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 900) {
                        mobileMenu.classList.remove('open');
                        hamburger.classList.remove('open');
                    }
                });
            });

            window.addEventListener('scroll', function() {
                handleScroll();
                updateActiveLink();
            });

            // Run once on load
            handleScroll();
            updateActiveLink();
        });

        function switchLanguage() {
            const currentLang = '{{ app()->getLocale() }}';
            const newLang = currentLang === 'en' ? 'ar' : 'en';
            document.getElementById('language-input').value = newLang;
            document.getElementById('language-form').submit();
        }
    </script>
</body>

</html>
