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

        /* Fix for toggle buttons hover */
        .toggle-container button {
            transition: all 0.3s ease;
        }

        .toggle-container button:hover {
            transform: translateY(-1px);
        }

        #show-register:hover,
        #show-login:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-white dark:bg-gray-800 min-h-screen flex items-center justify-center text-right font-sans">
    <div
        class="auth-container min-h-[calc(100vh-40px)] duration-500 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-[1fr,700px] w-full container relative">

        {{-- القسم الأيمن --}}
        <div
            class="right-section max-lg:w-[calc(100%-20px)] !backdrop-blur-lg w-full max-w-[600px] max-lg:max-w-full px-6 py-8 md:px-10 md:py-16 dark:bg-gray-800 bg-white mx-auto">
            <img class="mb-8 md:mb-12 w-[120px] md:w-[150px]" src="assets/logo.png" />

            <div
                class="toggle-container flex bg-[#4340931A] gap-2 dark:bg-gray-700 w-fit mx-auto rounded-full p-1 md:p-2 justify-end mb-6 md:mb-8">
                <button id="show-login"
                    class="px-3 py-1 md:px-4 md:py-2 rounded-full text-white bg-[#434093] dark:bg-[#5a56c0]    transition">تسجيل
                    دخول</button>
                <button id="show-register"
                    class="px-3 py-1 md:px-4 md:py-2 rounded-full text-primary-text dark:text-gray-300 dark:hover:bg-gray-600 transition">حساب
                    جديد</button>
            </div>

            {{-- نموذج تسجيل الدخول --}}
            <div id="login-form" class="hidden">
                <form>
                    <div class="input-group">
                        <label class="input-label dark:text-gray-300">البريد الالكتروني</label>
                        <input type="email" value="yosra@gmail.com"
                            class="input-field dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
                    </div>
                    <div class="input-group">
                        <label class="input-label dark:text-gray-300">كلمة المرور</label>
                        <input type="password" value="***************"
                            class="input-field dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
                    </div>
                    <div class="text-sm text-[#E9A760] text-left mb-6 cursor-pointer hover:underline">نسيت كلمة المرور ؟
                    </div>
                    <button type="submit"
                        class="btn bg-[#434093] hover:bg-[#363382] dark:bg-[#5a56c0] dark:hover:bg-[#4a478f] text-white">تسجيل
                        دخول</button>
                    <div class="my-4 text-center text-sm text-gray-500 dark:text-gray-400">أو</div>
                    <button type="button"
                        class="btn-white items-center flex justify-center gap-2 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">
                        <img src="assets/icons/google.png" class="w-5 ml-2" />
                        سجل دخول عبر جوجول
                    </button>
                </form>
            </div>

            {{-- نموذج إنشاء حساب --}}
            <div id="register-form" class="max-w-2xl mx-auto space-y-6 md:space-y-8">
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

                <!-- البريد الإلكتروني وكلمة المرور -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="input-label dark:text-gray-300">البريد الإلكتروني</label>
                        <input type="email" class="input-field dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            value="yosra@gmail.com" />
                    </div>
                    <div>
                        <label class="input-label dark:text-gray-300">كلمة المرور</label>
                        <div class="relative">
                            <input type="password"
                                class="input-field pr-10 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                value="123452323" />
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

                <!-- الشروط والأحكام -->
                <label class="inline-flex gap-2 items-center cursor-pointer group select-none">
                    <!-- Hidden checkbox (still accessible) -->
                    <input type="checkbox" name="accept" class="sr-only peer">

                    <!-- Custom checkbox container -->
                    <div
                        class="flex-none relative w-5 h-5 border-2 border-gray-400 rounded-md flex items-center justify-center transition-all duration-300 peer-checked:bg-[#f9a51a] peer-checked:border-[#f9a51a] peer-focus-visible:ring-2 peer-focus-visible:ring-[#f9a51a]">
                    </div>

                    <!-- Label text -->
                    <p class="text-xs md:text-sm text-gray-700 dark:text-gray-300">
                        بالتسجيل لدينا فـ أنت توافق علي
                        <span class="text-orange-400 font-semibold underline cursor-pointer">الشروط والأحكام</span>
                        و
                        <span class="text-orange-400 font-semibold underline cursor-pointer">سياسة الخصوصية</span>
                    </p>
                </label>

                <!-- زر إنشاء حساب -->
                <button
                    class=" go-to-otp btn w-full bg-[#434093] hover:bg-[#5c5ab2] dark:bg-[#2c2a6d] dark:hover:bg-[#403e8f] text-white min-h-[45px] rounded-[8px] p-[10px] md:p-[14px] text-sm md:text-base transition duration-200">
                    إنشاء حساب
                </button>
            </div>



            <div class="otp hidden ">
                <!-- بريد المستخدم -->
                <div class="text-center bg-[#4340921A] text-[#434093] text-sm py-3 px-5 rounded-lg mb-6">
                    تم إرسال رمز التحقق إلى example@mail.com
                </div>

                <!-- خانات الإدخال (OTP) -->
                <div class="grid grid-cols-6 justify-center gap-3 !pb-8 !pt-8 rtl">
                    @for ($i = 0; $i < 6; $i++)
                        <input type="text" maxlength="1"
                            class="w-full h-14 text-center text-xl font-bold bg-gray-100 rounded-lg shadow-sm border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-600"
                            name="otp[]">
                    @endfor
                </div>

                <!-- زر إعادة الإرسال -->
                <div class="text-center mb-6">
                    <button type="button" class="text-[#E9A760] hover:underline font-medium">إعادة الإرسال</button>
                </div>

                <!-- زر التأكيد -->
                <div class="mb-4">
                    <button type="submit"
                        class="btn">
                        تأكيد
                    </button>
                </div>

                <!-- تغيير البريد -->
                <div class="text-center text-sm text-gray-500">
                    <a href="#" class="hover:underline">إرسال إلى بريد إلكتروني آخر</a>
                </div>

            </div>
        </div>

        {{-- القسم الأيسر --}}
        <div class=" max-lg:!hidden  left-section w-full rounded-2xl text-white px-6 py-12 md:px-10 md:py-16 relative"
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

    <script>
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const showLoginBtn = document.getElementById('show-login');
        const showRegisterBtn = document.getElementById('show-register');

        // Show login form by default
        loginForm.classList.remove('hidden');
        registerForm.classList.add('hidden');
        showLoginBtn.classList.add('bg-[#434093]', 'text-white', 'dark:bg-[#5a56c0]');
        showRegisterBtn.classList.add('text-primary-text', 'dark:text-gray-300');

        showLoginBtn.addEventListener('click', () => {
            loginForm.classList.remove('hidden');
            registerForm.classList.add('hidden');
            showLoginBtn.classList.add('bg-[#434093]', 'text-white', 'dark:bg-[#5a56c0]');
            showLoginBtn.classList.remove('text-primary-text', 'dark:text-gray-300');
            showRegisterBtn.classList.remove('bg-[#434093]', 'text-white', 'dark:bg-[#5a56c0]');
            showRegisterBtn.classList.add('text-primary-text', 'dark:text-gray-300');
                        document.querySelector('.otp')?.classList.add('hidden');

        });

        showRegisterBtn.addEventListener('click', () => {
            registerForm.classList.remove('hidden');
            loginForm.classList.add('hidden');
            showRegisterBtn.classList.add('bg-[#434093]', 'text-white', 'dark:bg-[#5a56c0]');
            showRegisterBtn.classList.remove('text-primary-text', 'dark:text-gray-300');
            showLoginBtn.classList.remove('bg-[#434093]', 'text-white', 'dark:bg-[#5a56c0]');
            showLoginBtn.classList.add('text-primary-text', 'dark:text-gray-300');
                        document.querySelector('.otp')?.classList.add('hidden');

        });
    </script>

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

    {{-- Show OTP --}}

    <script>
        document.querySelector('.go-to-otp')?.addEventListener('click', function() {
            document.querySelector('#register-form')?.classList.add('hidden');
            document.querySelector('.otp')?.classList.remove('hidden');
        });
    </script>
</body>

</html>
