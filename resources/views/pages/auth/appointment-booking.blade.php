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
    <style>
        @media (max-width: 1023px) {
            .auth-container {
                grid-template-columns: 1fr !important;
            }

            .left-section {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 0;
                opacity: 0.9;
                border-radius: 0;
                /* padding: 2rem; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                text-align: center;
            }

            .right-section {
                z-index: 1;
                background-color: rgba(255, 255, 255, 0.9);
                /* margin: 1rem; */
                border-radius: 1rem;
                /* padding: 1.5rem; */
            }

            .dark .right-section {
                background-color: rgba(31, 41, 55, 0.9);
            }
        }
    </style>
    <style>
        /* Override selected day */
        .flatpickr-day.selected,
        .flatpickr-day.startRange,
        .flatpickr-day.endRange,
        .flatpickr-day:focus {
            background-color: #6561BF !important;
            border: none !important;
            color: white;
            border-radius: 50%;
        }

        /* First letter only of day names */
        .flatpickr-weekday {
            font-size: 0.875rem;
            font-weight: 600;
            color: #555;
        }

        .flatpickr-weekday:nth-child(1)::after {
            content: "S";
        }

        .flatpickr-weekday:nth-child(2)::after {
            content: "M";
        }

        .flatpickr-weekday:nth-child(3)::after {
            content: "T";
        }

        .flatpickr-weekday:nth-child(4)::after {
            content: "W";
        }

        .flatpickr-weekday:nth-child(5)::after {
            content: "T";
        }

        .flatpickr-weekday:nth-child(6)::after {
            content: "F";
        }

        .flatpickr-weekday:nth-child(7)::after {
            content: "S";
        }

        .flatpickr-weekday {
            color: #F9F9F9 !important;
            position: relative;
        }

        /* Make calendar full width */
        .flatpickr-calendar.inline {
            width: 100% !important;
            max-width: 100% !important;
        }

        .flatpickr-days,
        .flatpickr-innerContainer,
        .flatpickr-rContainer {
            width: 100% !important;
            border: none !important;
            box-shadow: none !important;
        }

        .flatpickr-prev-month,
        .flatpickr-next-month {
            fill: #101010 !important;
        }

        .flatpickr-next-month {
            right: unset !important;
            left: 40px !important;
        }

        .flatpickr-months {
            margin-bottom: 10px !important;
        }

        .flatpickr-current-month * {
            color: #101010 !important;
            background: transparent !important;
            border: none !important;
        }

        .flatpickr-current-month {
            width: 100% !important;
            left: 0 !important;
            justify-content: end !important;
            display: flex !important;
            height: 34px !important;
        }

        .flatpickr-weekdays,
        span.flatpickr-weekday,
        .dayContainer,
        .flatpickr-month,
        .flatpickr-calendar {
            background: #f9f9f9 !important;
            box-shadow: none !important;
        }

        .flatpickr-weekday::after {
            color: #101010 !important;
            font-weight: 500;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .flatpickr-weekdays {
            border-bottom: 1px solid #e5e5e5;
            padding-bottom: 5px;
        }

        .dayContainer {
            width: 100% !important;
            min-width: 100% !important;
            max-width: 100% !important;
            display: grid !important;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
            justify-content: center;
        }

        .dayContainer span {
            width: 100%;
            /* background: red; */
            margin: 0 auto;
        }
    </style>
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/material_blue.css">

</head>

<body class="bg-white dark:bg-gray-800 min-h-screen flex items-center justify-center text-right font-sans">
    <div
        class="auth-container min-h-[calc(100vh-40px)] duration-500 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[1fr,700px] w-full container relative">

        {{-- القسم الأيمن --}}
        <div
            class="right-section max-lg:w-[calc(100%-20px)] !backdrop-blur-lg w-full max-w-[600px] max-lg:max-w-full px-6 py-8 md:px-10 md:py-16 dark:bg-gray-800 bg-white mx-auto">
            <img class="mb-8 md:mb-12 w-[120px] md:w-[150px]" src="assets/logo.png" />

            <div class="input-group">
                <label class=" input-label !mb-3 ">اختر
                    التاريخ</label>

                <div id="inline-calendar" class="w-full rounded-lg  "></div>
            </div>

            <div class="max-w-2xl mx-auto space-y-6 md:space-y-8">
                <!-- مدة المكالمة -->
                <div x-data="{ selected: 0 }" class="input-group">
                    <label class="input-label dark:text-gray-300"> حدد التوقيت المناسب</label>
                    <div dir="ltr"
                        class="grid grid-cols-4 border border-dashed  overflow-hidden dark:border-gray-600">
                        <template x-for="(label, index) in ['5: 00 pm','4: 00 pm','3: 00 pm','2:30 pm']"
                            :key="index">
                            <button x-text="label"
                                :class="selected === index ?
                                    'bg-[#43409314] dark:bg-indigo-900/20 text-[#434093] dark:text-indigo-300  border-dashed border border-[#434093] dark:border-indigo-400' :
                                    'border-x border-gray-100 dark:border-gray-600 dark:text-gray-300 dark:hover:bg-gray-700/50'"
                                class="py-[10px] text-[13px] px-[2px] transition duration-200"
                                @click="selected = index">
                            </button>
                        </template>
                        <input type="hidden" name="call_duration"
                            :value="['5: 00 pm', '4: 00 pm', '3: 00 pm', '2:30 pm'][selected]">
                    </div>
                </div>


                <!-- الاسم الأول والاسم الأخير -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="input-label dark:text-gray-300">الاسم الأول</label>
                        <input type="text" class="input-field dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            value="يسرا" />
                    </div>
                    <div>
                        <label class="input-label dark:text-gray-300">الاسم الأخير</label>
                        <input type="text" class="input-field dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            value="علام" />
                    </div>
                </div>

                <!-- اسم الشركة ورقم الجوال -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="input-label dark:text-gray-300">اسم الشركة</label>
                        <input type="text" class="input-field dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            value="علام" />
                    </div>
                    <div class="relative w-full">
                        <label class="input-label dark:text-gray-300">رقم الجوال</label>
                        <div class="flex items-center gap-[2px]">
                            <!-- حقل الإدخال -->
                            <input type="tel"
                                class="rtl:!rounded-[0_8px_8px_0] ltr:!rounded-[8px_0_0_8px] flex-1 input-field dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="01001234567" />
                            <!-- زر كود الدولة -->
                            <div id="code-toggle"
                                class="bg-gray-50 ltr:rounded-[0_8px_8px_0] rtl:rounded-[8px_0_0_8px] hover:bg-gray-100 border border-gray-300/50 dark:!border-gray-600 dark:!bg-gray-900/50 text-sm p-2 md:p-2.5 text-gray-900 outline-none transition-all duration-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 dark:text-gray-100 dark:hover:bg-gray-700 dark:focus:border-indigo-400 dark:focus:ring-indigo-900/30 hover:border-gray-400 dark:hover:border-gray-600 custom-select flex items-center justify-between gap-1 px-3 h-[42px] dark:bg-gray-700 !w-fit cursor-pointer">
                                <img id="selected-flag" src="https://flagcdn.com/w40/eg.png" class="w-5" />
                                <svg class="w-fit h-4 rtl:ml-[-5px] ltr:ltr:mr-[-5px]" fill="none"
                                    viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" />
                                </svg>
                            </div>
                        </div>

                        <!-- القائمة المنسدلة -->
                        <div id="code-dropdown"
                            class="absolute z-50 bg-white dark:bg-gray-800 border dark:border-gray-600 mt-2 w-64 rounded-lg shadow-lg max-h-60 overflow-y-auto hidden">
                            <input type="text" id="code-search" placeholder="ابحث عن الدولة..."
                                class="w-full p-2 border-b dark:border-gray-600 bg-white dark:bg-gray-700 dark:text-white text-sm outline-none" />

                            <ul id="country-list" class="max-h-48 overflow-y-auto text-sm">
                                <!-- يتم تعبئتها ديناميكياً -->
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- عدد الموظفين + مجال عملك -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="select-group">
                        <label class="select-label dark:text-gray-300"> عدد الموظفين</label>
                        <select class="select-select">
                            <option class="dark:bg-gray-700">1-5 </option>
                            <option class="dark:bg-gray-700">5-10 </option>
                        </select>
                    </div>
                    <div class="select-group">
                        <label class="select-label dark:text-gray-300"> مجال عملك</label>
                        <select class="select-select">
                            <option class="dark:bg-gray-700"> تجاري</option>
                        </select>
                    </div>
                </div>

                <!-- زر إنشاء حساب -->
                <button
                    class="   btn w-full bg-[#434093] hover:bg-[#5c5ab2] dark:bg-[#2c2a6d] dark:hover:bg-[#403e8f] text-white min-h-[45px] rounded-[8px] p-[10px] md:p-[14px] text-sm md:text-base transition duration-200">
                    استمرار
                </button>
            </div>

        </div>

        {{-- القسم الأيسر --}}
        <div class=" max-h-[calc(100vh-40px)] sticky top-[20px] max-lg:!hidden  left-section w-full rounded-2xl text-white px-6 py-12 md:px-10 md:py-16  "
            style="background: linear-gradient(0deg, #434093 0%, #15142D 100%);">
            <img src="assets/landing/auth.png" class="p-1 object-cover z-[0] w-full h-full absolute inset-0" />
            <div class="relative z-10">
                <h2 class="mt-0 md:mt-[15%] text-2xl md:text-3xl font-bold mb-3 md:mb-4">مرحبًا بعودتك!</h2>
                <p class="text-xs md:text-sm max-w-[450px] leading-loose mb-6 md:mb-8">
                    سجّل الدخول للمتابعة، أو انضم الآن وابدأ في تتبّع وتحليل مكالماتك بذكاء. كل مكالمة تُحدث فرقًا –
                    راقب
                    الأداء، حسّن التواصل، واتخذ قرارات مبنية على بيانات حقيقية.
                </p>
            </div>
        </div>
    </div>


    {{-- Phone Number --}}
    <script>
        const countries = [{
                name: "مصر",
                code: "+20",
                flag: "eg"
            },
            {
                name: "السعودية",
                code: "+966",
                flag: "sa"
            },
            {
                name: "الإمارات",
                code: "+971",
                flag: "ae"
            },
            {
                name: "الكويت",
                code: "+965",
                flag: "kw"
            },
            {
                name: "قطر",
                code: "+974",
                flag: "qa"
            },
            {
                name: "تونس",
                code: "+216",
                flag: "tn"
            },
            {
                name: "المغرب",
                code: "+212",
                flag: "ma"
            },
            {
                name: "الجزائر",
                code: "+213",
                flag: "dz"
            },
            {
                name: "اليمن",
                code: "+967",
                flag: "ye"
            },
            {
                name: "تركيا",
                code: "+90",
                flag: "tr"
            }
        ];

        const dropdown = document.getElementById("code-dropdown");
        const toggle = document.getElementById("code-toggle");
        const selectedFlag = document.getElementById("selected-flag");
        const countryList = document.getElementById("country-list");
        const searchInput = document.getElementById("code-search");

        toggle.addEventListener("click", () => {
            dropdown.classList.toggle("hidden");
            if (!dropdown.classList.contains("hidden")) {
                searchInput.focus();
            }
            renderList(countries);
        });

        function renderList(data) {
            countryList.innerHTML = "";
            data.forEach(country => {
                const li = document.createElement("li");
                li.className =
                    "flex items-center gap-2 px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer";
                li.innerHTML = `
                    <img src="https://flagcdn.com/w40/${country.flag}.png" class="w-5" />
                    <span>${country.name}</span>
                    <span class="ml-auto text-xs text-gray-500">${country.code}</span>
                `;
                li.addEventListener("click", () => {
                    selectedFlag.src = `https://flagcdn.com/w40/${country.flag}.png`;
                    dropdown.classList.add("hidden");
                });
                countryList.appendChild(li);
            });
        }

        searchInput.addEventListener("input", e => {
            const keyword = e.target.value.trim().toLowerCase();
            const filtered = countries.filter(c =>
                c.name.toLowerCase().includes(keyword) || c.code.includes(keyword)
            );
            renderList(filtered);
        });

        document.addEventListener("click", (e) => {
            if (!toggle.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add("hidden");
            }
        });
    </script>

    {{-- Show and hidden the password  --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('input[type="password"]').forEach(input => {
                const wrapper = input.parentElement;
                wrapper.classList.add("relative");

                const toggleIconWrapper = document.createElement("span");
                toggleIconWrapper.className =
                    "password-toggle absolute rtl:left-3 ltr:right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400 cursor-pointer";

                const eyeIcon = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 
                                10.75 10.75 0 0 1 19.876 0 
                                1 1 0 0 1 0 .696 
                                10.75 10.75 0 0 1-19.876 0" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>`;

                const eyeOffIcon = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 
                                1 1 0 0 1 0 .696 
                                10.747 10.747 0 0 1-1.444 2.49" />
                        <path d="M14.084 14.158a3 3 0 0 1-4.242-4.242" />
                        <path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 
                                1 1 0 0 1 0-.696 
                                10.75 10.75 0 0 1 4.446-5.143" />
                        <path d="m2 2 20 20" />
                    </svg>`;

                toggleIconWrapper.innerHTML = eyeIcon;
                wrapper.appendChild(toggleIconWrapper);

                toggleIconWrapper.addEventListener("click", () => {
                    const isHidden = input.type === "password";
                    input.type = isHidden ? "text" : "password";
                    toggleIconWrapper.innerHTML = isHidden ? eyeOffIcon : eyeIcon;
                });
            });
        });
    </script>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#inline-calendar", {
            inline: true,
            locale: "en", // Use English for weekdays
            defaultDate: "2025-10-19",
            disableMobile: true,
            showMonths: 1,
        });
    </script>
</body>

</html>
