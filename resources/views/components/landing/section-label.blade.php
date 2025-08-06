@props([
    // allow extra classes to be passed in
    'class' => '',
])

<p
    {{ $attributes->merge([
        'class' => trim("text-primary-soft text-sm mb-2 bg-[#84B1561A] py-2 px-3 rounded-[8px] w-fit {$class}"),
    ]) }}>
    {{ $slot }}
</p>
