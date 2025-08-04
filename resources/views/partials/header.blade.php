<header class=" flex justify-between items-center px-6 py-2 bg-white shadow-sm dark:bg-gray-800">
    <!-- Left side: User Info -->
    <div class="flex items-center gap-4">
        <!-- Logo -->
        <img src="assets/logo.png" alt="CallsTrak Logo" class="w-[140px] object-contain dark:invert" />
    </div>

    <!-- Mobile menu button (hidden on desktop) -->
    <button id="mobile-menu-button" class="md:hidden w-10 h-10 flex items-center justify-center rounded-full bg-bg-muted border border-border dark:border-gray-600 dark:bg-gray-700">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark:stroke-white stroke-[#444750]">
            <path d="M3 12H21"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3 6H21"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3 18H21"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <!-- Right side: Controls (hidden on mobile) -->
    <div class="hidden md:flex items-center gap-4 max-md:gap-2">
        <!-- Language Switch -->
        <form method="POST" action="{{ route('language.switch') }}" id="language-form" class="hidden">
            @csrf
            <input type="hidden" name="language" id="language-input" value="">
        </form>

        <div class="flex items-center gap-2 bg-bg-muted h-[40px] w-fit rounded-full border px-2 border-border dark:bg-gray-700 dark:border-gray-600 text-gray-500 dark:text-gray-300 text-sm cursor-pointer select-none"
            onclick="switchLanguage()">
            @if (app()->getLocale() !== 'en')
                <img src="https://flagcdn.com/w40/gb.png" class="w-5 h-5 rounded-full" alt="EN" />
                English
            @else
                <img src="https://flagcdn.com/w40/sa.png" class="w-5 h-5 rounded-full" alt="AR" />
                العربية
            @endif
        </div>

        <!-- Theme Switch (Dark / Light toggle) -->
        <form method="POST" action="{{ route('theme.switch') }}">
            @csrf
            <button type="submit"
                class="w-[86px] h-[40px] flex-none flex items-center justify-between rounded-full px-1 bg-bg-muted border border-border dark:bg-gray-700 dark:border-gray-600 transition-colors">
                <span
                    class="w-8 h-8 flex items-center justify-center rounded-full {{ session('theme') === 'light' ? 'bg-indigo-700 text-white' : '' }}">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_756_3916)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9 0.9375C9.14918 0.9375 9.29226 0.996763 9.39775 1.10225C9.50324 1.20774 9.5625 1.35082 9.5625 1.5V2.25C9.5625 2.39918 9.50324 2.54226 9.39775 2.64775C9.29226 2.75324 9.14918 2.8125 9 2.8125C8.85082 2.8125 8.70774 2.75324 8.60225 2.64775C8.49676 2.54226 8.4375 2.39918 8.4375 2.25V1.5C8.4375 1.35082 8.49676 1.20774 8.60225 1.10225C8.70774 0.996763 8.85082 0.9375 9 0.9375ZM3.29925 3.29925C3.40472 3.19391 3.54769 3.13474 3.69675 3.13474C3.84581 3.13474 3.98878 3.19391 4.09425 3.29925L4.389 3.59325C4.49152 3.69929 4.54828 3.84135 4.54707 3.98884C4.54586 4.13633 4.48677 4.27744 4.38252 4.38178C4.27828 4.48612 4.13722 4.54534 3.98974 4.5467C3.84225 4.54805 3.70014 4.49142 3.594 4.389L3.29925 4.09425C3.19391 3.98878 3.13474 3.84581 3.13474 3.69675C3.13474 3.54769 3.19391 3.40472 3.29925 3.29925ZM14.7008 3.29925C14.8061 3.40472 14.8653 3.54769 14.8653 3.69675C14.8653 3.84581 14.8061 3.98878 14.7008 4.09425L14.406 4.389C14.2994 4.48836 14.1583 4.54245 14.0126 4.53988C13.8669 4.53731 13.7278 4.47828 13.6248 4.37522C13.5217 4.27216 13.4627 4.13312 13.4601 3.98739C13.4575 3.84167 13.5116 3.70063 13.611 3.594L13.9058 3.29925C14.0112 3.19391 14.1542 3.13474 14.3032 3.13474C14.4523 3.13474 14.5953 3.19391 14.7008 3.29925ZM9 5.0625C7.95571 5.0625 6.95419 5.47734 6.21577 6.21577C5.47734 6.95419 5.0625 7.95571 5.0625 9C5.0625 10.0443 5.47734 11.0458 6.21577 11.7842C6.95419 12.5227 7.95571 12.9375 9 12.9375C10.0443 12.9375 11.0458 12.5227 11.7842 11.7842C12.5227 11.0458 12.9375 10.0443 12.9375 9C12.9375 7.95571 12.5227 6.95419 11.7842 6.21577C11.0458 5.47734 10.0443 5.0625 9 5.0625ZM3.9375 9C3.9375 7.65734 4.47087 6.36967 5.42027 5.42027C6.36967 4.47087 7.65734 3.9375 9 3.9375C10.3427 3.9375 11.6303 4.47087 12.5797 5.42027C13.5291 6.36967 14.0625 7.65734 14.0625 9C14.0625 10.3427 13.5291 11.6303 12.5797 12.5797C11.6303 13.5291 10.3427 14.0625 9 14.0625C7.65734 14.0625 6.36967 13.5291 5.42027 12.5797C4.47087 11.6303 3.9375 10.3427 3.9375 9ZM0.9375 9C0.9375 8.85082 0.996763 8.70774 1.10225 8.60225C1.20774 8.49676 1.35082 8.4375 1.5 8.4375H2.25C2.39918 8.4375 2.54226 8.49676 2.64775 8.60225C2.75324 8.70774 2.8125 8.85082 2.8125 9C2.8125 9.14918 2.75324 9.29226 2.64775 9.39775C2.54226 9.50324 2.39918 9.5625 2.25 9.5625H1.5C1.35082 9.5625 1.20774 9.50324 1.10225 9.39775C0.996763 9.29226 0.9375 9.14918 0.9375 9ZM15.1875 9C15.1875 8.85082 15.2468 8.70774 15.3523 8.60225C15.4577 8.49676 15.6008 8.4375 15.75 8.4375H16.5C16.6492 8.4375 16.7923 8.49676 16.8977 8.60225C17.0032 8.70774 17.0625 8.85082 17.0625 9C17.0625 9.14918 17.0032 9.29226 16.8977 9.39775C16.7923 9.50324 16.6492 9.5625 16.5 9.5625H15.75C15.6008 9.5625 15.4577 9.50324 15.3523 9.39775C15.2468 9.29226 15.1875 9.14918 15.1875 9ZM13.611 13.611C13.7165 13.5057 13.8594 13.4465 14.0085 13.4465C14.1576 13.4465 14.3005 13.5057 14.406 13.611L14.7008 13.9058C14.756 13.9572 14.8003 14.0193 14.8311 14.0883C14.8618 14.1573 14.8784 14.2318 14.8797 14.3074C14.881 14.3829 14.8671 14.4579 14.8388 14.5279C14.8106 14.598 14.7684 14.6616 14.715 14.715C14.6616 14.7684 14.598 14.8106 14.5279 14.8388C14.4579 14.8671 14.3829 14.881 14.3074 14.8797C14.2318 14.8784 14.1573 14.8618 14.0883 14.8311C14.0193 14.8003 13.9572 14.756 13.9058 14.7008L13.611 14.406C13.5057 14.3005 13.4465 14.1576 13.4465 14.0085C13.4465 13.8594 13.5057 13.7165 13.611 13.611ZM4.389 13.611C4.49434 13.7165 4.55351 13.8594 4.5535 14.0085C4.5535 14.1576 4.49434 14.3005 4.389 14.406L4.09425 14.7008C4.04275 14.756 3.98065 14.8003 3.91165 14.8311C3.84265 14.8618 3.76817 14.8784 3.69264 14.8797C3.61711 14.881 3.54209 14.8671 3.47205 14.8388C3.40201 14.8106 3.33839 14.7684 3.28497 14.715C3.23156 14.6616 3.18945 14.598 3.16116 14.5279C3.13287 14.4579 3.11897 14.3829 3.12031 14.3074C3.12164 14.2318 3.13817 14.1573 3.16891 14.0883C3.19966 14.0193 3.24398 13.9572 3.29925 13.9058L3.59325 13.611C3.64549 13.5587 3.70751 13.5173 3.77578 13.489C3.84405 13.4607 3.91723 13.4461 3.99112 13.4461C4.06502 13.4461 4.1382 13.4607 4.20647 13.489C4.27474 13.5173 4.33676 13.5587 4.389 13.611ZM9 15.1875C9.14918 15.1875 9.29226 15.2468 9.39775 15.3523C9.50324 15.4577 9.5625 15.6008 9.5625 15.75V16.5C9.5625 16.6492 9.50324 16.7923 9.39775 16.8977C9.29226 17.0032 9.14918 17.0625 9 17.0625C8.85082 17.0625 8.70774 17.0032 8.60225 16.8977C8.49676 16.7923 8.4375 16.6492 8.4375 16.5V15.75C8.4375 15.6008 8.49676 15.4577 8.60225 15.3523C8.70774 15.2468 8.85082 15.1875 9 15.1875Z"
                                fill="currentColor" />
                        </g>
                        <defs>
                            <clipPath id="clip0_756_3916">
                                <rect width="18" height="18" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
                <span
                    class="w-8 h-8 flex items-center justify-center rounded-full {{ session('theme') === 'dark' ? 'bg-indigo-700 text-white' : '' }}">
                    <svg class="stroke-[#444750] dark:stroke-white" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1.69256 10.35C1.99256 14.6417 5.63422 18.1334 9.99256 18.325C13.0676 18.4584 15.8176 17.025 17.4676 14.7667C18.1509 13.8417 17.7842 13.225 16.6426 13.4334C16.0842 13.5334 15.5092 13.575 14.9092 13.55C10.8342 13.3834 7.50089 9.97503 7.48422 5.95003C7.47589 4.8667 7.70089 3.8417 8.10922 2.90836C8.55922 1.87503 8.01756 1.38336 6.97589 1.82503C3.67589 3.2167 1.41756 6.54169 1.69256 10.35Z"
                            stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
            </button>
        </form>

        <!-- Download Icon -->
        <button  onclick="downloadApp()"
            class="w-[40px] h-[40px] flex items-center justify-center rounded-full bg-bg-muted border border-border dark:bg-gray-700 dark:border-gray-600 hover:bg-bg-soft dark:hover:bg-gray-700 duration-300">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class=" stroke-gray-600 dark:stroke-white">
                <path d="M7.5 9.16669V14.1667L9.16667 12.5" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M7.50065 14.1667L5.83398 12.5" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M18.3327 8.33335V12.5C18.3327 16.6667 16.666 18.3334 12.4993 18.3334H7.49935C3.33268 18.3334 1.66602 16.6667 1.66602 12.5V7.50002C1.66602 3.33335 3.33268 1.66669 7.49935 1.66669H11.666"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M18.3327 8.33335H14.9993C12.4993 8.33335 11.666 7.50002 11.666 5.00002V1.66669L18.3327 8.33335Z"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>

        <div class="flex items-center gap-2">
            <img src="assets/avatar.png" alt="avatar" class=" w-9 h-9 rounded-full bg-gray-200" />
            <div class="flex flex-col text-right">
                <span class="text-sm font-semibold text-gray-800 dark:text-white">يسرا علام</span>
                <span class="text-xs text-gray-500 dark:text-gray-300">yosra@mail.com</span>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu Popup -->
<div id="mobile-menu" class="fixed inset-0 z-50  hidden md:!hidden bg-black bg-opacity-50">
    <div class="absolute right-0 top-0 h-full w-3/4 bg-white dark:bg-gray-800 shadow-lg p-4">
        <div class="flex justify-between items-center mb-6">
            <img src="assets/logo.png" alt="CallsTrak Logo" class="w-[120px] object-contain dark:invert" />
            <button id="close-menu" class="p-2 rounded-full stroke-gray-600 dark:stroke-white bg-gray-100 dark:bg-gray-700">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark:stroke-white">
                    <path d="M18 6L6 18"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6 6L18 18"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        
        <div class="space-y-4">
            <!-- Language Switch -->
            <div class="flex items-center justify-between flex-row-reverse gap-2 bg-bg-muted h-[40px] w-full rounded-full border px-4 border-border dark:bg-gray-700 dark:border-gray-600 text-gray-500 dark:text-gray-300 text-sm cursor-pointer select-none"
                onclick="switchLanguage()">
                @if (app()->getLocale() !== 'en')
                    <img src="https://flagcdn.com/w40/gb.png" class="w-5 h-5 rounded-full" alt="EN" />
                    English
                @else
                    <img src="https://flagcdn.com/w40/sa.png" class="w-5 h-5 rounded-full" alt="AR" />
                    العربية
                @endif
            </div>

            <!-- Theme Switch -->
            <form method="POST" action="{{ route('theme.switch') }}" class="w-full">
                @csrf
                <button type="submit" class="w-full h-[40px] flex items-center justify-between rounded-full px-4 bg-bg-muted border border-border dark:bg-gray-700 dark:border-gray-600">
                    <span class="text-sm text-gray-500 dark:text-gray-300">Theme</span>
                    <div class="flex items-center gap-2">
                        <span class="text-sm text-gray-500 dark:text-gray-300">{{ session('theme') === 'light' ? 'Light' : 'Dark' }}</span>
                        <span class="w-6 h-6 flex items-center justify-center rounded-full {{ session('theme') === 'light' ? 'bg-indigo-700' : 'bg-indigo-700' }}">
                            @if(session('theme') === 'light')
                                <svg width="16" height="16" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M9 0.9375C9.14918 0.9375 9.29226 0.996763 9.39775 1.10225C9.50324 1.20774 9.5625 1.35082 9.5625 1.5V2.25C9.5625 2.39918 9.50324 2.54226 9.39775 2.64775C9.29226 2.75324 9.14918 2.8125 9 2.8125C8.85082 2.8125 8.70774 2.75324 8.60225 2.64775C8.49676 2.54226 8.4375 2.39918 8.4375 2.25V1.5C8.4375 1.35082 8.49676 1.20774 8.60225 1.10225C8.70774 0.996763 8.85082 0.9375 9 0.9375ZM3.29925 3.29925C3.40472 3.19391 3.54769 3.13474 3.69675 3.13474C3.84581 3.13474 3.98878 3.19391 4.09425 3.29925L4.389 3.59325C4.49152 3.69929 4.54828 3.84135 4.54707 3.98884C4.54586 4.13633 4.48677 4.27744 4.38252 4.38178C4.27828 4.48612 4.13722 4.54534 3.98974 4.5467C3.84225 4.54805 3.70014 4.49142 3.594 4.389L3.29925 4.09425C3.19391 3.98878 3.13474 3.84581 3.13474 3.69675C3.13474 3.54769 3.19391 3.40472 3.29925 3.29925ZM14.7008 3.29925C14.8061 3.40472 14.8653 3.54769 14.8653 3.69675C14.8653 3.84581 14.8061 3.98878 14.7008 4.09425L14.406 4.389C14.2994 4.48836 14.1583 4.54245 14.0126 4.53988C13.8669 4.53731 13.7278 4.47828 13.6248 4.37522C13.5217 4.27216 13.4627 4.13312 13.4601 3.98739C13.4575 3.84167 13.5116 3.70063 13.611 3.594L13.9058 3.29925C14.0112 3.19391 14.1542 3.13474 14.3032 3.13474C14.4523 3.13474 14.5953 3.19391 14.7008 3.29925ZM9 5.0625C7.95571 5.0625 6.95419 5.47734 6.21577 6.21577C5.47734 6.95419 5.0625 7.95571 5.0625 9C5.0625 10.0443 5.47734 11.0458 6.21577 11.7842C6.95419 12.5227 7.95571 12.9375 9 12.9375C10.0443 12.9375 11.0458 12.5227 11.7842 11.7842C12.5227 11.0458 12.9375 10.0443 12.9375 9C12.9375 7.95571 12.5227 6.95419 11.7842 6.21577C11.0458 5.47734 10.0443 5.0625 9 5.0625ZM3.9375 9C3.9375 7.65734 4.47087 6.36967 5.42027 5.42027C6.36967 4.47087 7.65734 3.9375 9 3.9375C10.3427 3.9375 11.6303 4.47087 12.5797 5.42027C13.5291 6.36967 14.0625 7.65734 14.0625 9C14.0625 10.3427 13.5291 11.6303 12.5797 12.5797C11.6303 13.5291 10.3427 14.0625 9 14.0625C7.65734 14.0625 6.36967 13.5291 5.42027 12.5797C4.47087 11.6303 3.9375 10.3427 3.9375 9ZM0.9375 9C0.9375 8.85082 0.996763 8.70774 1.10225 8.60225C1.20774 8.49676 1.35082 8.4375 1.5 8.4375H2.25C2.39918 8.4375 2.54226 8.49676 2.64775 8.60225C2.75324 8.70774 2.8125 8.85082 2.8125 9C2.8125 9.14918 2.75324 9.29226 2.64775 9.39775C2.54226 9.50324 2.39918 9.5625 2.25 9.5625H1.5C1.35082 9.5625 1.20774 9.50324 1.10225 9.39775C0.996763 9.29226 0.9375 9.14918 0.9375 9ZM15.1875 9C15.1875 8.85082 15.2468 8.70774 15.3523 8.60225C15.4577 8.49676 15.6008 8.4375 15.75 8.4375H16.5C16.6492 8.4375 16.7923 8.49676 16.8977 8.60225C17.0032 8.70774 17.0625 8.85082 17.0625 9C17.0625 9.14918 17.0032 9.29226 16.8977 9.39775C16.7923 9.50324 16.6492 9.5625 16.5 9.5625H15.75C15.6008 9.5625 15.4577 9.50324 15.3523 9.39775C15.2468 9.29226 15.1875 9.14918 15.1875 9ZM13.611 13.611C13.7165 13.5057 13.8594 13.4465 14.0085 13.4465C14.1576 13.4465 14.3005 13.5057 14.406 13.611L14.7008 13.9058C14.756 13.9572 14.8003 14.0193 14.8311 14.0883C14.8618 14.1573 14.8784 14.2318 14.8797 14.3074C14.881 14.3829 14.8671 14.4579 14.8388 14.5279C14.8106 14.598 14.7684 14.6616 14.715 14.715C14.6616 14.7684 14.598 14.8106 14.5279 14.8388C14.4579 14.8671 14.3829 14.881 14.3074 14.8797C14.2318 14.8784 14.1573 14.8618 14.0883 14.8311C14.0193 14.8003 13.9572 14.756 13.9058 14.7008L13.611 14.406C13.5057 14.3005 13.4465 14.1576 13.4465 14.0085C13.4465 13.8594 13.5057 13.7165 13.611 13.611ZM4.389 13.611C4.49434 13.7165 4.55351 13.8594 4.5535 14.0085C4.5535 14.1576 4.49434 14.3005 4.389 14.406L4.09425 14.7008C4.04275 14.756 3.98065 14.8003 3.91165 14.8311C3.84265 14.8618 3.76817 14.8784 3.69264 14.8797C3.61711 14.881 3.54209 14.8671 3.47205 14.8388C3.40201 14.8106 3.33839 14.7684 3.28497 14.715C3.23156 14.6616 3.18945 14.598 3.16116 14.5279C3.13287 14.4579 3.11897 14.3829 3.12031 14.3074C3.12164 14.2318 3.13817 14.1573 3.16891 14.0883C3.19966 14.0193 3.24398 13.9572 3.29925 13.9058L3.59325 13.611C3.64549 13.5587 3.70751 13.5173 3.77578 13.489C3.84405 13.4607 3.91723 13.4461 3.99112 13.4461C4.06502 13.4461 4.1382 13.4607 4.20647 13.489C4.27474 13.5173 4.33676 13.5587 4.389 13.611ZM9 15.1875C9.14918 15.1875 9.29226 15.2468 9.39775 15.3523C9.50324 15.4577 9.5625 15.6008 9.5625 15.75V16.5C9.5625 16.6492 9.50324 16.7923 9.39775 16.8977C9.29226 17.0032 9.14918 17.0625 9 17.0625C8.85082 17.0625 8.70774 17.0032 8.60225 16.8977C8.49676 16.7923 8.4375 16.6492 8.4375 16.5V15.75C8.4375 15.6008 8.49676 15.4577 8.60225 15.3523C8.70774 15.2468 8.85082 15.1875 9 15.1875Z"
                                        fill="currentColor" />
                                </svg>
                            @else
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.69256 10.35C1.99256 14.6417 5.63422 18.1334 9.99256 18.325C13.0676 18.4584 15.8176 17.025 17.4676 14.7667C18.1509 13.8417 17.7842 13.225 16.6426 13.4334C16.0842 13.5334 15.5092 13.575 14.9092 13.55C10.8342 13.3834 7.50089 9.97503 7.48422 5.95003C7.47589 4.8667 7.70089 3.8417 8.10922 2.90836C8.55922 1.87503 8.01756 1.38336 6.97589 1.82503C3.67589 3.2167 1.41756 6.54169 1.69256 10.35Z"
                                        stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            @endif
                        </span>
                    </div>
                </button>
            </form>

            <!-- Download Button -->
            <button  onclick="downloadApp()" class="w-full h-[40px] flex items-center justify-between rounded-full px-4 bg-bg-muted border border-border dark:border-gray-600 dark:bg-gray-700">
                <span class="text-sm text-gray-500 dark:text-gray-300">Download</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark:stroke-white">
                    <path d="M7.5 9.16669V14.1667L9.16667 12.5" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7.50065 14.1667L5.83398 12.5" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path
                        d="M18.3327 8.33335V12.5C18.3327 16.6667 16.666 18.3334 12.4993 18.3334H7.49935C3.33268 18.3334 1.66602 16.6667 1.66602 12.5V7.50002C1.66602 3.33335 3.33268 1.66669 7.49935 1.66669H11.666"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path
                        d="M18.3327 8.33335H14.9993C12.4993 8.33335 11.666 7.50002 11.666 5.00002V1.66669L18.3327 8.33335Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <!-- User Profile -->
            <div class="flex items-center gap-3 p-3 rounded-lg bg-gray-100 dark:bg-gray-700">
                <img src="assets/avatar.png" alt="avatar" class="w-10 h-10 rounded-full bg-gray-200" />
                <div class="flex flex-col">
                    <span class="text-sm font-semibold text-gray-800 dark:text-white">يسرا علام</span>
                    <span class="text-xs text-gray-500 dark:text-gray-300">yosra@mail.com</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function switchLanguage() {
        const currentLang = '{{ app()->getLocale() }}';
        const newLang = currentLang === 'en' ? 'ar' : 'en';
        document.getElementById('language-input').value = newLang;
        document.getElementById('language-form').submit();
    }

    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.remove('hidden');
    });

    document.getElementById('close-menu').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.add('hidden');
    });

    // Close menu when clicking outside
    document.getElementById('mobile-menu').addEventListener('click', function(e) {
        if (e.target === this) {
            this.classList.add('hidden');
        }
    });
</script>