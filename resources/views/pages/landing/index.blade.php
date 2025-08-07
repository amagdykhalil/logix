@extends('layouts.app')

@php
    $infoCards = [
        [
            'title' => 'توصيل و تحصيل سريع',
            'description' => 'الالتزام بالمواعيد الدقيقة لخدمة أكثر دقة و اطمئنان',
            'subtitle' => null,
            'svg' => 'components.icons.fast-delivery',
        ],

        [
            'title' => 'دعم فني شامل',
            'description' => 'فريق كول سنتر تحت تصرفك في أي وقت',
            'subtitle' => null,
            'svg' => 'components.icons.telephone',
        ],
        [
            'title' => 'حلول لوجستية لكل نشاط',
            'subtitle' => '( تجارة إلكترونية - شركات -أفراد )',
            'description' => 'تخزين, شحن, توصيل, إدارة و تنفيذ.',
            'svg' => 'components.icons.delivery-logistics',
        ],
    ];

    $services = [
        [
            'title' => 'خدمة استلام الشحنات',
            'description' => 'نستلم شحناتك من الموردين أو شركات التوصيل، ونسجلها فوراً داخل النظام.',
            'number' => '01',
        ],
        [
            'title' => 'فحص وترتيب المنتجات',
            'description' => 'نفحص كل منتج بعناية، ونعتمده قبل تخزينه أو شحنه، لضمان أعلى جودة.',
            'number' => '02',
        ],
        [
            'title' => 'إدارة التخزين والمخزون',
            'description' => 'تخزين منظم للمنتجات حسب التصنيف، مع تتبع دقيق وتقارير مستمرة.',
            'number' => '03',
        ],
        [
            'title' => 'تجهيز الطلبات',
            'description' => 'نجهز الطلبات وفق معايير تغليف دقيقة، وجاهزية الشحن الفوري.',
            'number' => '04',
        ],
        [
            'title' => 'الشحن والتوصيل',
            'description' => 'ندير عملية الشحن من التغليف حتى التسليم، ونوفر خدمة توصيل سلسة للعملاء.',
            'number' => '05',
        ],
    ];

    $features = [
        [
            'number' => 1,
            'title' => 'أنشئ حسابك و استفيد بالخدمات',
            'description' => 'أنشئ حسابك وفعّل الخدمات اللي محتاجها (تخزين، تجهيز، شحن...).',
            'borderColor' => '#206B8B',
            'iconPath' => './assets/icons/controls/element-1.svg',
            'numberPosition' => 'bottom',
        ],
        [
            'number' => 2,
            'title' => 'سلم منتجاتك الأولى',
            'description' => 'نستلمها ونفحصها ونخزنها بأعلى معايير الجودة.',
            'borderColor' => '#84B156',
            'iconPath' => './assets/icons/controls/element-2.svg',
            'numberPosition' => 'top',
        ],
        [
            'number' => 3,
            'title' => 'تابع عملياتك من مكان واحد',
            'description' => 'كل ما تحتاجه من (طلبات - شحنات -تقاريرك) في لوحة تحكم إحترافية.',
            'borderColor' => '#E7B070',
            'iconPath' => './assets/icons/controls/element-3.svg',
            'numberPosition' => 'bottom',
        ],
    ];

    $partners = [
        'Simplification-1.svg',
        'Simplification-2.svg',
        'Simplification-3.svg',
        'Simplification-4.svg',
        'Simplification-5.svg',
        'Simplification-6.svg',
        'Simplification-7.svg',
    ];

    $posts = [
        [
            'video' => 'assets/videos/nature.mp4',
            'likes' => 16,
            'shares' => 43,
            'comments' => 500,
            'saves' => '7,888',
        ],
        [
            'video' => 'assets/videos/amazing.mp4',
            'likes' => 16,
            'shares' => 43,
            'comments' => 500,
            'saves' => '7,888',
        ],
        [
            'video' => 'assets/videos/tranquility.mp4',
            'likes' => 16,
            'shares' => 43,
            'comments' => 500,
            'saves' => '7,888',
        ],
    ];

    $faqCategories = [
        'general' => [
            'id' => 'general',
            'title' => 'الأسئلة العامة',
            'questions' => [
                [
                    'number' => '01',
                    'question' => 'ما هي الخدمات التي تقدمها منصة Logistics؟',
                    'answer' =>
                        'توفر المنصة خدمات التخزين، والشحن، والتتبع، وإدارة المخزون، ودعم العملاء على مدار الساعة.',
                ],
                [
                    'number' => '02',
                    'question' => 'كيف يمكنني إنشاء حساب جديد على المنصة؟',
                    'answer' =>
                        'اضغط على زر “إنشاء حساب” في الصفحة الرئيسية، ثم قم بإدخال بياناتك الأساسية وتأكيد بريدك الإلكتروني للبدء.',
                ],
                [
                    'number' => '03',
                    'question' => 'هل تدعم المنصة اللغة العربية فقط أم لغات أخرى؟',
                    'answer' => 'المنصة متاحة حالياً باللغتين العربية والإنجليزية، وسيتم إضافة لغات إضافية قريباً.',
                ],
                [
                    'number' => '04',
                    'question' => 'ما هي طرق الدفع المتاحة؟',
                    'answer' =>
                        'يمكنك الدفع ببطاقات الائتمان (Visa, MasterCard) أو تحويل بنكي أو عبر خدمة Apple/Google Pay.',
                ],
            ],
        ],

        'receiving' => [
            'id' => 'receiving',
            'title' => 'إستلام الشحنات',
            'questions' => [
                [
                    'number' => '01',
                    'question' => 'كيف يمكنني جدولة استلام الشحنة من المخزن؟',
                    'answer' =>
                        'يمكنك جدولة الاستلام عبر لوحة التحكم في قسم “إدارة الشحنات” باختيار التاريخ والوقت المناسبين.',
                ],
                [
                    'number' => '02',
                    'question' => 'ما هي المستندات المطلوبة عند الاستلام؟',
                    'answer' => 'يُطلب منك إظهار رقم الطلب وبطاقة الهوية أو رخصة العمل لتوثيق عملية الاستلام.',
                ],
                [
                    'number' => '03',
                    'question' => 'ماذا أفعل إذا كانت الشحنة تالفة عند الاستلام؟',
                    'answer' => 'قم بتوثيق الأضرار بالصورة واتصل فوراً بفريق الدعم لتقديم بلاغ فتح تحقيق.',
                ],
            ],
        ],

        'storage' => [
            'id' => 'storage',
            'title' => 'إدارة التخزين والمخزون',
            'questions' => [
                [
                    'number' => '01',
                    'question' => 'كيف أتحقق من مستوى المخزون المتبقي؟',
                    'answer' =>
                        'يمكنك رؤية المخزون المتاح في قسم “المخزون” على لوحة التحكم، حيث يظهر الكمية الحالية وتنبيهات النقص.',
                ],
                [
                    'number' => '02',
                    'question' => 'هل يمكنني تخصيص أماكن تخزين معينة لبضائعي؟',
                    'answer' =>
                        'نعم، المنصة تتيح إنشاء مواقع تخزين افتراضية وتخصيصها حسب فئة المنتج أو تاريخ الانتهاء.',
                ],
                [
                    'number' => '03',
                    'question' => 'كيف يمكنني استيراد بيانات المخزون من ملف CSV؟',
                    'answer' =>
                        'اذهب إلى “استيراد/تصدير” ثم اختر ملف CSV من جهازك وتأكد من تطابق الأعمدة قبل الاستيراد.',
                ],
                [
                    'number' => '04',
                    'question' => 'هل يوجد حد أقصى لحجم التخزين؟',
                    'answer' =>
                        'لا يوجد حد افتراضي، ويمكنك زيادة السعة التخزينية حسب الباقة المختارة أو بإضافة سعة إضافية.',
                ],
            ],
        ],

        'orders' => [
            'id' => 'orders',
            'title' => 'إدارة الطلبات',
            'questions' => [
                [
                    'number' => '01',
                    'question' => 'كيف يمكنني إنشاء طلب شحن جديد؟',
                    'answer' =>
                        'من لوحة التحكم اختر “طلب جديد”، ثم أدخل بيانات المرسل والمستلم وقم بتأكيد تفاصيل الشحنة.',
                ],
                [
                    'number' => '02',
                    'question' => 'هل يمكن تعديل طلب قيد المعالجة؟',
                    'answer' => 'يمكنك تعديل البيانات قبل مرور 24 ساعة من جدولة الشحن عبر صفحة الطلبات الخاصة بك.',
                ],
                [
                    'number' => '03',
                    'question' => 'كيف ألغى طلباً وأسترد المبلغ المدفوع؟',
                    'answer' =>
                        'انتقل إلى الطلب، واضغط على “إلغاء الطلب”، وسيتم استرداد المدفوعات وفقاً لسياسة الاسترداد.',
                ],
            ],
        ],

        'inspection' => [
            'id' => 'inspection',
            'title' => 'فحص المنتجات',
            'questions' => [
                [
                    'number' => '01',
                    'question' => 'ما هي عملية فحص الجودة للبضائع؟',
                    'answer' =>
                        'نقوم بفحص البضائع حسب المعايير المتفق عليها (حالة التغليف، الكمية، الصلاحية) قبل التخزين.',
                ],
                [
                    'number' => '02',
                    'question' => 'كم يستغرق الفحص عادةً؟',
                    'answer' => 'عادةً ما يتم إتمام الفحص خلال 1–2 يوم عمل بعد وصول الشحنة إلى المستودع.',
                ],
                [
                    'number' => '03',
                    'question' => 'هل يمكنني طلب فحص إضافي بعد التخزين؟',
                    'answer' => 'نعم، يمكنك طلب فحص لاحق عبر خيار “طلبات الفحص” مع تحديد نوع الفحص المطلوب.',
                ],
                [
                    'number' => '04',
                    'question' => 'ما هي تكاليف خدمة الفحص؟',
                    'answer' => 'تختلف التكاليف حسب نوع الفحص والكمية، وتظهر بوضوح في صفحة “الفوترة” قبل التأكيد.',
                ],
            ],
        ],

        'shipping' => [
            'id' => 'shipping',
            'title' => 'الشحن والتوصيل',
            'questions' => [
                [
                    'number' => '01',
                    'question' => 'ما هي شركات الشحن التي تعمل معها المنصة؟',
                    'answer' => 'نتعاون مع أبرز شركات الشحن المحلية والدولية مثل أرامكس وفيديكس وDHL.',
                ],
                [
                    'number' => '02',
                    'question' => 'كيف أتابع حالة التوصيل؟',
                    'answer' => 'يمكنك متابعة رقم التتبع في لوحة “حالة الشحنات” أو عبر الإشعارات الآلية في التطبيق.',
                ],
                [
                    'number' => '03',
                    'question' => 'ما هو الوقت المتوقع لوصول الشحنة داخل البلاد؟',
                    'answer' => 'عادةً تصل الشحنات خلال 1–3 أيام عمل داخل نفس الدولة، وخلال 5–7 أيام للشحن الدولي.',
                ],
                [
                    'number' => '04',
                    'question' => 'هل يمكنني تعديل عنوان التوصيل بعد الشحن؟',
                    'answer' => 'يمكن تعديل العنوان ضمن أول 2 ساعة من إعداد الشحنة عن طريق التواصل مع الدعم مباشرةً.',
                ],
            ],
        ],
    ];

    $footerLinks = [
        'important' => [
            'title' => 'روابط هامة',
            'links' => [
                ['text' => 'أماكن تواجدنا', 'url' => '#locations'],
                ['text' => 'الأسئلة الشائعة', 'url' => '#questions'],
                ['text' => 'عملائنا', 'url' => '#clients'],
                ['text' => 'تواصل معنا', 'url' => '#contact'],
            ],
        ],
        'main' => [
            'title' => 'روابط هامة',
            'links' => [
                ['text' => 'الرئيسية', 'url' => '#home'],
                ['text' => 'من نحن', 'url' => '#about'],
                ['text' => 'خدماتنا', 'url' => '#services'],
                ['text' => 'ابدأ الآن', 'url' => '#start'],
            ],
        ],
    ];

@endphp

@push('styles')
    <style>
        .hero-section {
            background-image: url('./assets/landing/hero.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }


        .nav {
            border: 1px solid #5D6165;
            background: #FCFCFC24;
            backdrop-filter: blur(20px)
        }


        .nav-link {
            font-family: Montserrat-Arabic;
            font-weight: 500;
            font-style: Medium;
            leading-trim: NONE;
            line-height: 150%;
            letter-spacing: 0%;
            width: 94;
            height: 24;
            angle: 0 deg;
            opacity: 1;
            color: white;
            position: relative;

        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #84B156;
            transition: width 0.3s ease, left 0.3s ease;
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

        .hamburger.open span {
            transition: all 0.3s ease;
            transform-origin: center;
        }

        .hamburger.open span:first-child {
            transform: rotate(45deg) translateY(8px) translateX(3px)
        }

        .hamburger.open span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.open span:last-child {
            transform: rotate(-45deg) translateY(-11px) translateX(3px)
        }



        .mobile-nav-link:hover,
        .nav-link:hover {
            color: #84b156;
        }

        .nav-link.active::after {
            width: 100%;
        }

        .mobile-nav-link.active,
        .nav-link.active {
            color: #84B156;
            font-weight: 500;
        }

        @media (min-width: 810px) {
            .custom-transform {
                transform: translateY(4rem);
            }
        }

        .group-image {
            background-image: url('./assets/landing/group.png');
            background-repeat: no-repeat;
            background-position: right bottom;
            background-size: auto;
            /* or use contain / cover / 200px auto as needed */
        }

        footer {
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(51.51% 51.51% at 50% 48.49%, #0e435af2 0%, #012839 100%),
                url('./assets/landing/footer.jpg');


            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1
        }
    </style>
@endpush

@section('content')
    <section id='home' class="hero-section relative min-h-[970px] w-full">

        <div class='min-h-[970px] absolute top-0 left-0 w-full'
            style="background: linear-gradient(187.79deg, #141E29 -0.35%, rgba(32, 32, 32, 0) 93.71%);">
        </div>

        <div class='container relative z-10 min-h-[970px] flex flex-col gap-4'>
            <div class='flex flex-col gap-8 lg:gap-[66px]'>
                <!-- Header Navigation -->
                <header id='header' class="w-screen fixed z-50 pt-3 pb-3 left-1/2 -translate-x-1/2 ">
                    <div
                        class="container w-full px-6 flex flex-row-reverse md:flex-row justify-between items-center gap-4 lg:gap-0">
                        <!-- Logo - First on mobile, last on desktop -->

                        <!-- Login Button - Third on mobile, first on desktop -->
                        <a href="{{ url('/login') }}"
                            class='hover:bg-primary-softDark transition-colors  w-[140px] lg:w-[156px] h-[50px] lg:h-[55px] rounded-[8px] bg-primary-soft py-[5px] px-[15px] hidden md:flex  items-center gap-[10px] outline-none'>
                            <img src="./assets/icons/login.png" alt="login" class="w-4 h-4 lg:w-5 lg:h-5 ">
                            <span class='font-[400] text-sm lg:text-base leading-[100%] tracking-[0] text-white '>
                                تسجيل دخول
                            </span>
                        </a>
                        <!-- Navigation - Second on mobile, second on desktop -->
                        <nav id='buttons-container'
                            class="nav w-full sm:w-auto lg:w-[559px] h-auto lg:h-[64px] hidden md:flex  flex-wrap sm:flex-nowrap items-center justify-center gap-4 lg:gap-[30px] opacity-100 rounded-[15px] pt-[16px] pr-[15px] lg:pr-[25px] pb-[15px] pl-[15px] lg:pl-[25px] border border-solid text-[#FCFCFC24]">
                            <a href="#contact" class='nav-link text-[14px] lg:text-base cursor-pointer'>تواصل
                                معانا</a>
                            <a href="#questions" class='nav-link text-[14px] lg:text-base cursor-pointer'>الاسئلة
                                الشائعة</a>
                            <a href="#services" class='nav-link text-[14px] lg:text-base cursor-pointer'>الخدمات</a>
                            <a href="#about" class='nav-link text-[14px] lg:text-base cursor-pointer'>من
                                نحن</a>
                            <a href="#home" class='nav-link active cursor-pointer text-[14px] lg:text-base'>الرئيسية</a>
                        </nav>

                        <img src='./assets/logo.png' class='w-[70px] h-[40px] lg:w-[89px] lg:h-[51px]' />


                        <button class="p-2  flex md:hidden" id="mobile-menu-button">
                            <div class="hamburger w-6 flex flex-col justify-between h-5">
                                <span class="block w-full h-0.5 bg-gray-300 rounded"></span>
                                <span class="block w-full h-0.5 bg-gray-300 rounded"></span>
                                <span class="block w-full h-0.5 bg-gray-300 rounded"></span>
                            </div>
                        </button>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu w-full absolute left-0 top-full bg-white shadow-lg" id="mobile-menu">
                            <ul class="flex flex-col text-gray-600 font-medium text-sm rtl">
                                <li class="nav-item border-b border-gray-100">
                                    <a href="#home"
                                        class="mobile-nav-link block py-4 px-6 text-primary-dark active">الرئيسية</a>
                                </li>
                                <li class="nav-item border-b border-gray-100">
                                    <a href="#about" class="mobile-nav-link block py-4 px-6 text-primary-dark">من نحن</a>
                                </li>
                                <li class="nav-item border-b border-gray-100">
                                    <a href="#services"
                                        class="mobile-nav-link block py-4 px-6 text-primary-dark">الخدمات</a>
                                </li>
                                <li class="nav-item border-b border-gray-100">
                                    <a href="#questions" class="mobile-nav-link block py-4 px-6 text-primary-dark">الاسئلة
                                        الشائعة</a>
                                </li>
                                <li class="nav-item border-b border-gray-100">
                                    <a href="#contact" class="mobile-nav-link block py-4 px-6 text-primary-dark">تواصل
                                        معانا</a>
                                </li>
                                <li class="nav-item border-b border-gray-100">
                                    <a href="{{ route('login') }}"
                                        class="mobile-nav-link block py-4 px-6 hover:text-[#434093]">
                                        تسجيل دخول</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </header>
                <!-- Main Content -->
                <div class='opacity-100 pt-[185px]'>
                    <div class='max-w-[1000px] flex gap-6 lg:gap-[35px] flex-col ml-auto'>
                        <!-- Main Heading -->
                        <div class='relative h-auto lg:h-[120px] opacity-100 ml-auto'>
                            <img src="./assets/icons/group.svg"
                                class='absolute max-w-[150px] lg:max-w-[300px] top-[-3px] right-[-20px] lg:right-[-40px] hidden lg:block' />
                            <p dir="rtl"
                                class='h-auto lg:h-[120px] pl-[15px] lg:pl-[28px] font-semibold text-2xl sm:text-3xl lg:text-[38px] leading-[1.4] lg:leading-[60px] tracking-[-0.025em] text-right'>
                                <span class='text-primary-soft'>خدمات لوجستية</span>
                                كاملة بين إيديك… تسهل عليك وتخليك تركز على تجارتك في النمو و النجاح.
                            </p>
                            <img src="./assets/landing/curved-line.svg"
                                class='absolute max-w-[150px] lg:max-w-[300px] top-[40px] lg:top-[56px] left-[20px] lg:left-[145px] hidden lg:block' />
                        </div>

                        <!-- Description -->
                        <p dir="rtl"
                            class='w-full max-w-[960px] font-[400] text-lg sm:text-xl lg:text-[28px] leading-[1.4] lg:leading-[35px] text-right tracking-normal ml-auto text-[#F2F2F2]'>
                            سواء كنت صاحب متجر إلكترونية, أو مشروع صغير. نوفر لك مخازن متعددة في دول الخليج و خدمات لوجستية,
                            تساعدك تتوسع في مشروعك في دول مختلفة و تدعمك في كل خطوة نحو النجاح.
                        </p>


                        <!-- Action Buttons -->
                        <div class='flex flex-col sm:flex-row gap-4 ml-auto justify-center sm:justify-end mt-8 lg:mt-0'>
                            <a <a href="{{ url('/signup') }}"
                                class='hover:bg-gray-200 transition-colors  w-full sm:w-[170px] h-[50px] lg:h-[55px] rounded-[8px] bg-white py-[5px] px-[15px] flex items-center justify-center gap-[10px] outline-none'>
                                <img src="./assets/icons/send-2.svg" alt="send-2"
                                    class="w-4 h-4 lg:w-5 lg:h-5 text-primary-dark">
                                <p class='font-[400] text-sm lg:text-base leading-[100%] tracking-[0] text-primary-dark'>
                                    ابدأ معانا الآن
                                </p>
                            </a>
                            <a href="#services"
                                class='hover:bg-primary-softDark transition-colors w-full sm:w-[170px] h-[50px] lg:h-[55px] rounded-[8px] bg-primary-soft py-[5px] px-[15px] flex items-center justify-center gap-[10px] outline-none'>
                                <img src="./assets/icons/note-2.svg" alt="note-2" class="w-4 h-4 lg:w-5 lg:h-5 ">
                                <p class='font-[400] text-sm lg:text-base leading-[100%] tracking-[0] text-white '>
                                    تصفح خدماتنا
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Cards - Bottom Section -->
            <div class="relative z-10 flex flex-col flex-1">
                <div id='card-hero'
                    class="mt-auto w-full max-w-[1400px] h-auto lg:h-[250px] flex flex-col lg:flex-row ml-auto rounded-tl-[5px] lg:gap-0">
                    @foreach ($infoCards as $infoCard)
                        <x-landing.info-card title="{{ $infoCard['title'] }}" subtitle="{{ $infoCard['subtitle'] }}"
                            description="{{ $infoCard['description'] }}" :svg="view($infoCard['svg'])->render()" />
                    @endforeach



                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-12 lg:py-20">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="relative flex flex-col lg:flex-row gap-[88px] lg:gap-12 items-center">

                <!-- Left Images Section -->
                <div data-aos="fade-up" class="w-[556px] relative flex-row hidden lg:flex gap-[1.3rem]">
                    <!-- Warehouse Image -->
                    <div class="relative w-[275px]">
                        <img src="assets/landing/hero.jpg" alt="مستودع لوجستي"
                            class="w-[275px] h-[465px] object-cover shadow-lg" />
                    </div>

                    <!-- Logistics Scene Image -->
                    <div class="relative w-[257px]">
                        <img src="assets/landing/cars.png" alt="مشهد لوجستي"
                            class="absolute bottom-[-40px] w-[257px] h-[389px] object-fill shadow-lg" />

                        <!-- Stats Overlay -->
                        <div class="absolute flex gap-3 right-0 top-0">
                            <div
                                class="w-[123px] h-[94px] bg-primary-dark text-white px-4 py-2 shadow flex justify-center items-center flex-col gap-[7px]">
                                <div class="text-2xl font-bold">+8k</div>
                                <div class="text-xl">الطلبات</div>
                            </div>
                            <div
                                class="w-[123px] h-[94px] bg-primary-soft text-white px-4 py-2 shadow flex justify-center items-center flex-col gap-[7px]">
                                <div class="text-2xl font-bold">+10k</div>
                                <div class="text-xl">عميل</div>
                            </div>

                        </div>
                    </div>

                    <div class="absolute -top-8 left-1/2 -translate-x-1/2 flex flex-col gap-3 z-10">
                        <!-- Logo Overlay -->
                        <div class="flex justify-center mt-[10.5rem]">
                            <div class="flex items-center justify-center bg-white rounded-full p-3 shadow-md w-24 h-24">
                                <img src="assets/icons/green.svg" alt="Logo" />
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Right Content Section -->
                <div data-aos="fade-left" class="lg:col-span-7 text-right" dir="rtl">
                    <!-- Header -->
                    <div class="mb-6">
                        <x-landing.section-label>
                            من نحن وماذا نقدم
                        </x-landing.section-label>

                        <h2 class="text-2xl lg:text-3xl font-[500] text-gray-800 leading-tight">
                            منصة لوجستية متكاملة لإدارة
                            <span class="text-primary-soft">تجارتك الإلكترونية</span>
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <p class="text-[#0128398a] text-lg leading-relaxed text-[18px]">
                            منصة تشغيل متكاملة لإدارة تجارتك الإلكترونية، توفر لك كل ما تحتاجه من
                            تخزين المنتجات، إدارة الطلبات، التغليف، الشحن، وتتبع الشحنات - كل ذلك من
                            خلال نظام واحد، يوفر عليك الوقت والمجهود، ويضمن لك تشغيل أكثر
                            كفاءة تركيز على النمو والتوسع.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-start mb-8 ">
                        <button
                            class=' hover:bg-primary-softDark transition-colors w-full sm:w-[170px] h-[55px] rounded-[8px] bg-primary-soft py-[5px] px-[15px] flex items-center justify-center gap-[10px] outline-none'>
                            <p class='font-[400] text-base leading-[100%] tracking-[0] text-white '>
                                انضم إلينا
                            </p>
                            <img src="./assets/icons/login.png" alt="note-2" class="w-5 h-5 ">
                        </button>

                        <a href='#contact'
                            class='transition-opacity hover:bg-opacity-80  w-full sm:w-[170px] h-[55px] rounded-[8px] bg-primary-dark py-[5px] px-[15px] flex items-center justify-center gap-[10px] outline-none'>
                            <p class='font-[400] text-base leading-[100%] tracking-[0] text-white '>
                                تواصل معنا
                            </p>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class='w-5 h-5 '>
                                <path
                                    d="M14.2 2.96667L6.67498 5.46667C1.61664 7.15834 1.61664 9.91667 6.67498 11.6L8.90831 12.3417L9.64998 14.575C11.3333 19.6333 14.1 19.6333 15.7833 14.575L18.2916 7.05834C19.4083 3.68334 17.575 1.84167 14.2 2.96667ZM14.4666 7.45001L11.3 10.6333C11.175 10.7583 11.0166 10.8167 10.8583 10.8167C10.7 10.8167 10.5416 10.7583 10.4166 10.6333C10.175 10.3917 10.175 9.99167 10.4166 9.75001L13.5833 6.56667C13.825 6.32501 14.225 6.32501 14.4666 6.56667C14.7083 6.80834 14.7083 7.20834 14.4666 7.45001Z"
                                    class='fill-white' />
                            </svg>

                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="group-image relative bg-gray-50 py-10 px-6 overflow-hidden" dir="rtl">
        <div class="container">
            <div class="max-w-[1203px] mx-auto h-full flex flex-col items-center ">

                <x-landing.section-header>
                    <x-slot name="label">خدماتنا اللوجستية</x-slot>
                    ندير كل تفصيلة باحتراف… من التخزين
                    <span class="text-primary-soft">للشحن والتتبع.</span>
                </x-landing.section-header>

                <div class="flex justify-center items-center flex-wrap gap-6 ">
                    @foreach ($services as $service)
                        <x-landing.service-card :title="$service['title']" :description="$service['description']" :number="$service['number']" />
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <section id='start' class="group-image container relative py-10 pb-16 px-6 overflow-hidden" dir="rtl">
        <div class="max-w-[1203px] mx-auto h-full flex flex-col items-center ">

            <x-landing.section-header>
                <x-slot name="label">تبدأ معانا ازاي؟</x-slot>
                خلي شغلك يوصل بسهولة… بدون
                <span class="text-primary-soft">حواجز تعطلك.</span>
            </x-landing.section-header>

            <div class="relative flex justify-center items-center flex-wrap gap-8 mt-12">
                <!-- Step 1 - Rightmost -->
                <x-landing.control-panel-card :number="$features[0]['number']" title="{{ $features[0]['title'] }}"
                    description="{{ $features[0]['description'] }}" :borderColor="$features[0]['borderColor']" :numberPosition="$features[0]['numberPosition']"
                    :iconpath="$features[0]['iconPath']" />

                <img src='./assets/icons/controls/vector-1.svg'
                    class='hidden xl:block absolute top-[100px] right-[317px] z-[5]' />.

                <!-- Step 2 - Middle (moved down) -->
                <div class="custom-transform">
                    <x-landing.control-panel-card :number="$features[1]['number']" title="{{ $features[1]['title'] }}"
                        description="{{ $features[1]['description'] }}" :borderColor="$features[1]['borderColor']" :numberPosition="$features[1]['numberPosition']"
                        :iconpath="$features[1]['iconPath']" />
                </div>

                <img src='./assets/icons/controls/vector-2.svg'
                    class='hidden xl:block absolute top-[294px] left-[317px] z-[5]'' />.

                <!-- Step 3 - Leftmost (moved up and made smaller) -->
                <div class="transform -translate-y-8 scale-90">
                    <x-landing.control-panel-card :number="$features[2]['number']" title="{{ $features[2]['title'] }}"
                        description="{{ $features[2]['description'] }}" :borderColor="$features[2]['borderColor']" :numberPosition="$features[2]['numberPosition']"
                        :iconpath="$features[2]['iconPath']" />
                </div>

            </div>

        </div>
    </section>

    <section id='locations' class="container relative py-10 pb-16 px-6 overflow-hidden" dir="rtl">

        <x-landing.section-header>
            <x-slot name="label">أماكن تواجدنا</x-slot>
            نتواجد في أسواق استراتيجية لنكون
            <span class="text-primary-soft">أقرب لعملائنا.</span>
        </x-landing.section-header>

        <img data-aos="fade-right" src='./assets/landing/world.png' class="mt-12 mx-auto" />


    </section>

    <section class="relative bg-gray-50 py-10 pb-16 px-6 overflow-hidden" dir="rtl">
        <div class="container">
            <x-landing.section-header>
                <x-slot name="label">تابعنا الآن</x-slot>
                كل جديد عندنا… تابعنا وكن جزءًا
                <span class="text-primary-soft">من مجتمعنا.</span>
            </x-landing.section-header>
            <div class="flex flex-wrap justify-center items-center gap-5">
                @foreach ($posts as $post)
                    <x-landing.post-card :video="$post['video']" :likes="$post['likes']" :shares="$post['shares']" :comments="$post['comments']"
                        :saves="$post['saves']" />
                @endforeach
            </div>
        </div>

    </section>

    <section id='clients' class="relative bg-gray-50 py-10 pb-16 px-6 overflow-hidden" dir="rtl">
        <div class="container">
            <x-landing.section-header>
                <x-slot name="label">عملائنا</x-slot>
                كن ضمن أكثر من 100 + شريك معنا, يثقون بأن النجاح
                <span class="text-primary-soft">يبدأ بثقة و نتائج.</span>
            </x-landing.section-header>
            <div class="flex flex-wrap justify-center items-center gap-x-[25px] gap-y-[30px] max-w-[1200px] mx-auto">
                @foreach ($partners as $icon)
                    <x-landing.partner-card svg="assets/landing/partners/{{ $icon }}" />
                @endforeach
            </div>
            <img src='./assets/landing/group.png' class='absolute right-0 bottom-0 ' />
        </div>
    </section>

    <section id='questions' class="container relative py-10 pb-16 px-6 overflow-hidden" dir="rtl">
        <x-landing.section-header>
            <x-slot name="label">الأسئلة الشائعة</x-slot>
            قبل ما تبدأ... جمعنالك أهم
            <span class="text-primary-soft">الأسئلة وإجاباتها.</span>
        </x-landing.section-header>

        <div class="flex flex-col lg:flex-row justify-center items-start gap-6 lg:gap-[27px] max-w-[1200px] mx-auto">
            <!-- Menu Items - Stack vertically on mobile, horizontal on desktop -->
            <div
                class='flex flex-row lg:flex-col w-full lg:w-[170px] gap-2 lg:gap-[14px] overflow-x-auto lg:overflow-x-visible pb-4 lg:pb-0'>
                @foreach ($faqCategories as $key => $item)
                    <x-landing.menu-item :label="$item['title']" :id="$item['id']" />
                @endforeach
            </div>

            <!-- FAQ Items - Full width on mobile -->
            <div class="flex-1 flex flex-col gap-4 lg:gap-[23px]">
                @foreach ($faqCategories as $key => $cat)
                    <div id='{{ $cat['id'] }}' class="ques-main flex flex-col gap-4 lg:gap-[23px]">
                        @foreach ($cat['questions'] as $faq)
                            <x-landing.qes-item :number="$faq['number']" :question="$faq['question']" :answer="$faq['answer']" />
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer id='contact' class="border-t-[5px] border-t-primary-soft rotate-0 opacity-100">
        <div class='container'>
            <div
                class="mx-auto px-6  mt-[100px] mb-[57px] flex flex-col lg:flex-row lg:justify-between gap-8  space-y-5 lg:space-y-0">
                <!-- Contact Form -->
                <!-- Contact Form -->
                <div class="lg:w-[320px]">
                    <h3 class="text-[20px] font-semibold mb-4">تواصل معنا</h3>

                    <form class="p-[10px] flex flex-wrap sm:flex-nowrap items-center gap-2 bg-[#0C3C52] rounded-[10px]">
                        <button type="submit"
                            class="hover:bg-primary-softDark transition-colors bg-primary-soft px-8 py-2 rounded-[10px] flex-shrink-0">
                            إرسال
                        </button>

                        <div class="flex items-center flex-1 min-w-0">
                            <input type="email" placeholder="name@domain.com"
                                class="w-full px-4 py-2 bg-[#0C3C52] text-white outline-none focus:ring-0 border-none min-w-40"
                                {{-- allows the input to shrink below its content width --}} />

                            <img src="assets/icons/email.svg" class="w-6 h-6 ml-2 flex-shrink-0" alt="Email Icon" />
                        </div>
                    </form>
                </div>


                <!-- Important Links -->
                <div class="lg:min-w-[300px] grid grid-cols-2 gap-8 ">
                    <x-landing.footer-links :title="$footerLinks['important']['title']" :links="$footerLinks['important']['links']" />

                    <x-landing.footer-links :title="$footerLinks['main']['title']" :links="$footerLinks['main']['links']" />
                </div>

                <!-- Logo, Description & Social Icons -->
                <div dir="rtl" class="lg:min-w-[220px]">
                    <img src="./assets/logo.png" alt="LOGIK COD" class="w-[90px] h-[50px]" />

                    <p class="mt-4 text-base leading-relaxed">
                        منصة لوجيستية متكاملة لتدبير التخزين، التجهيز والشحن من مكان واحد.
                    </p>

                    <div class="mt-6 flex gap-[15px]">
                        <!-- Facebook -->
                        <a href="#" class="hover:text-blue-500">
                            <img src='assets/icons/socials/facebook.svg' class='bg-white rounded-full p-[10px]' />
                        </a>

                        <!-- Twitter -->
                        <a href="#" class="hover:text-blue-500">
                            <img src='assets/icons/socials/twitter.svg' class='bg-white rounded-full p-[10px]' />
                        </a>

                        <!-- Instagram -->
                        <a href="#" class="hover:text-blue-500">
                            <img src='assets/icons/socials/instagram.svg' class='bg-white rounded-full p-[10px]' />
                        </a>

                        <!-- YouTube -->
                        <a href="#" class="hover:text-blue-500">
                            <img src='assets/icons/socials/youtube.svg' class='bg-white rounded-full p-[10px]' />
                        </a>

                    </div>
                </div>
            </div>

            <div class=" text-center py-4 text-xs mt-[70px]">
                جميع الحقوق محفوظة © 2025
            </div>
        </div>
    </footer>
    @push('scripts')
        <script></script>
    @endpush
@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const header = document.getElementById('header');
            const navLinks = document.querySelectorAll('.nav-link');
            const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburger = document.querySelector('.hamburger');

            // Mobile menu toggle
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('open');
                hamburger.classList.toggle('open');
            });



            // Close mobile menu when clicking a link
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 900) {
                        mobileMenu.classList.remove('open');
                        hamburger.classList.remove('open');
                    }
                });
            });

            // 3. Close on outside click
            document.addEventListener('click', event => {
                const clickedInsideMenu = mobileMenu.contains(event.target);
                const clickedOnToggleBtn = mobileMenuButton.contains(event.target);

                if (!clickedInsideMenu && !clickedOnToggleBtn &&
                    mobileMenu.classList.contains('open')) {
                    mobileMenu.classList.remove('open');
                    hamburger.classList.remove('open');
                }
            });

            function updateActiveLink() {
                const scrollPosition = window.scrollY + 150;

                document.querySelectorAll('section').forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        // Remove active class from all links
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                        });

                        // Add active class to corresponding link
                        const activeLink = document.querySelector(`.nav-link[href="#${sectionId}"]`);
                        if (activeLink) {
                            activeLink.classList.add('active');
                        }
                    }
                });
            }

            function handleScroll() {
                if (window.scrollY > 100) {
                    header.style.backdropFilter = 'blur(4px)';
                    header.style.backgroundColor = 'rgba(0, 0, 0, 0.3)';
                    header.style.transition = 'all 0.1s ease';
                } else {
                    header.style.backdropFilter = 'none';
                    header.style.backgroundColor = 'transparent';
                }
            }
            window.addEventListener('scroll', () => {
                handleScroll()
                updateActiveLink()
            });
        });
    </script>
@endpush
