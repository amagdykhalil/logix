@props(['label', 'type', 'value' => '', 'name', 'placeholder' => ''])

<div class="w-full  ml-auto">
    <label for="{{ $name }}"
        class="block mb-[7px]
           text-primary-dark
           text-[12px] font-[Montserrat-Arabic] font-medium
           leading-[160%] tracking-[-2%] text-right">
        {{ $label }}
    </label>

    <input dir='rtl' type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        value="{{ $value }}" placeholder="{{ $placeholder }}"
        class="w-full h-[45px] px-4 py-2 border border-gray-200 focus:border-gray-300 bg-gray-100  rounded-lg outline-none focus:ring-0 text-right text-sm text-gray-600" />
</div>
