@props([
    'title' => 'روابط هامة',
    'links' => [],
    'iconPath' => './assets/icons/arrow.svg',
])

<div>
    <h4 class="text-lg md:text-[20px] font-semibold mb-4">{{ $title }}</h4>
    <ul class="space-y-2">
        @foreach ($links as $link)
            <li class='text-[14px] md:text-base  flex gap-[1px] justify-end'>
                <a href="{{ $link['url'] ?? '#' }}" class="hover:underline {{ $link['class'] ?? '' }}"
                    @if (isset($link['target'])) target="{{ $link['target'] }}" @endif>
                    {{ $link['text'] }}
                </a>
                <img src="{{ $iconPath }}" alt="arrow" />
            </li>
        @endforeach
    </ul>
</div>
