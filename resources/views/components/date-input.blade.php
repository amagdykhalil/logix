@props(['label', 'name', 'default', 'format', 'placeholder'])

<div class="input-group">
    <label class="input-label">{{ $label }}</label>

    <div class="relative">
        <!-- Calendar icon -->
        <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
            <svg class="text-gray-400" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z" />
            </svg>
        </div>

        <!-- Input field -->
        <input
            id="{{ $name }}-input"
            name="{{ $name }}"
            type="text"
            class=" input-field w-full pl-10 pr-4 py-2 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
            placeholder="{{ $placeholder }}"
            value="{{ $default }}"
            readonly>
    </div>
</div>

@once
    <!-- Include flatpickr CDN once -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endonce

@push('scripts')
    <script>
        flatpickr("#{{ $name }}-input", {
            @if($default)
            defaultDate: "{{ $default }}",
            @endif
            locale: "ar"
        });
    </script>
@endpush
