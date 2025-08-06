@props([
    'text',
    'icon',         // SVG icon or class
    'color' => 'bg-indigo-700', // Default to purple
    'textColor' => 'text-white', // Default text color
    'href' => '#' ,
		'id' => ''
])

<a id="{{$id}}" href="{{ $href }}"
   {{ $attributes->merge(['class' => "$color $textColor hover:opacity-90 transition-all px-4 py-2 rounded-lg flex items-center gap-2 font-semibold text-sm"]) }}>
    {!! $icon !!}
    <span>{{ $text }}</span>
</a>
