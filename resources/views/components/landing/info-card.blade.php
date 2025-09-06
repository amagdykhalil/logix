@props(['title', 'subtitle' => null, 'description', 'svg'])


@push('styles')
    <style>
        /* Apply same hover effect manually when .hover class is added */
        .info-card.active {
            background-color: #012839;
            border-color: #84b156;
        }

        .info-card.active .title {
            color: #ffffff;
        }

        .info-card.active .subtitle {
            color: #ffffffd0;
        }
    </style>
@endpush


<div
    class="info-card  py-8 sm:py-12 lg:pt-[60px] p-4 sm:p-6 lg:p-7  flex justify-center flex-1 h-full hover:bg-primary-dark border-t-[3px] lg:border-t-[5px] hover:border-[#84B156] bg-white group transition-colors">
    <div class="flex flex-col sm:flex-row gap-3 sm:gap-2 lg:gap-[10px] items-center sm:items-start">
        <!-- SVG Icon - Top on mobile, right on desktop -->
        <div class="order-1 sm:order-2 flex-shrink-0">
            <div class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 flex items-center justify-center">
                {!! $svg !!}
            </div>
        </div>

        <!-- Text Content - Bottom on mobile, left on desktop -->
        <div dir="rtl" class="order-2 sm:order-1 text-center sm:text-right">
            <p
                class="title text-lg sm:text-xl  leading-[1.2] lg:leading-[100%] text-primary-dark group-hover:text-white font-[400] mb-2 lg:mb-3">
                {{ $title }}
            </p>
            <p
                class="subtitle text-sm sm:text-base  text-[#012839c5] group-hover:text-primary-grayWhite font-[300] leading-[1.4] lg:leading-[1.6]">
                @if ($subtitle)
                    <span class="block sm:inline font-MontserratArabic">{{ $subtitle }}</span>
                    <br class="hidden sm:block">
                @endif
                {{ $description }}
            </p>
        </div>
    </div>
</div>


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.info-card');
            const firstCard = cards[cards.length - 1];

            function updateFirstCardHoverState() {
                const isAnyCardHovered = Array.from(cards).some(card => card.matches(':hover'));

                if (!isAnyCardHovered) {
                    firstCard.classList.add('active');
                } else {
                    firstCard.classList.remove('active');
                }
            }
            // initailize
            updateFirstCardHoverState()

            // Watch for mouse movements over the container
            const parent = firstCard.parentElement;
            parent.addEventListener('mouseenter', updateFirstCardHoverState);
            parent.addEventListener('mouseleave', () => {
                firstCard.classList.add('active');
            });
        });
    </script>
@endpush
