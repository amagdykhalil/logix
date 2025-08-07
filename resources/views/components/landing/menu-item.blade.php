@props([
    'label', // Arabic text string
    'id',
])

@once
    @push('styles')
        <style>
            /* Base inactive style (already in component) */

            /* Active state overrides */
            .ques-item.active {
                background-color: #84B156;
                /* or your primary-soft */
                color: white;
                opacity: 1;
                cursor: default;
            }

            /* Inactive hover state */
            .ques-item:not(.active):hover {
                opacity: 0.8;
            }
        </style>
    @endpush
@endonce

@props([
    'label', // Arabic text string
])

@php
    // Base classes for font, sizing, alignment, and default (inactive) appearance
    $base =
        'ques-item w-full text-[13px] leading-[33px] tracking-[0%] align-middle font-[400] rounded-[8px] text-center bg-[#F8F8F8] text-gray-500 hover:opacity-80 cursor-pointer px-4 py-2';
@endphp

<button id="{{ $id }}" type="button" {{ $attributes->merge(['class' => $base]) }}>
    {{ $label }}




    @once
        @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const items = Array.from(document.querySelectorAll('.ques-item'));
                    const questions = Array.from(document.querySelectorAll('.ques-main'));

                    // Initialize: deactivate all, then activate first
                    items.forEach(i => i.classList.remove('active'));
                    items[0].classList.add('active');

                    // Hide all questions, show only the one matching the first button
                    questions.forEach(q => {
                        if (q.id === items[0].id) {
                            q.classList.remove('hidden');
                            q.classList.add('flex');
                        } else {
                            q.classList.remove('flex');
                            q.classList.add('hidden');
                        }
                    });

                    // Switch on click
                    items.forEach(item => {
                        item.addEventListener('click', () => {
                            // Deactivate all buttons
                            items.forEach(i => i.classList.remove('active'));

                            // Hide all panels
                            questions.forEach(q => {
                                if (q.id === item.id) {
                                    q.classList.remove('hidden');
                                    q.classList.add('flex');
                                } else {
                                    q.classList.remove('flex');
                                    q.classList.add('hidden');
                                }
                            });

                            // Activate the clicked button
                            item.classList.add('active');

                        });
                    });
                });
            </script>
        @endpush
    @endonce
