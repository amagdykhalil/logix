@props(['label' => 'الوسوم', 'name' => 'tags', 'placeholder' => 'اكتب واضغط Enter'])

<div class="input-group mb-4">
    <label class="input-label">{{ $label }}</label>

    <div id="{{ $name }}-wrapper"
        class="flex flex-wrap items-center gap-2 rounded-lg"
        onclick="document.getElementById('{{ $name }}-input').focus()">

        <!-- Tags go here -->
        <template id="{{ $name }}-template">
            <span class="flex items-center gap-2 bg-indigo-700 text-white text-sm px-3 py-1 rounded-full">
                <span class="tag-label"></span>
                <button type="button" class="text-xl leading-none font-bold remove-btn">&times;</button>
                <input type="hidden" name="{{ $name }}[]" />
            </span>
        </template>

        <!-- Input inside the same container -->
        <input type="text" id="{{ $name }}-input" placeholder="{{ $placeholder }}"
            class="input-field"
            onkeydown="handle{{ ucfirst($name) }}Key(event)" />
    </div>
</div>

<script>
    (() => {
        const name = @json($name);
        const wrapper = document.getElementById(`${name}-wrapper`);
        const input = document.getElementById(`${name}-input`);
        const template = document.getElementById(`${name}-template`);
        let tags = [];

        function renderTags() {
            // Remove all existing tags (except input)
            wrapper.querySelectorAll('span').forEach(el => el.remove());

            tags.forEach((tag, index) => {
                const clone = template.content.cloneNode(true);
                const span = clone.querySelector('span');
                const label = clone.querySelector('.tag-label');
                const hidden = clone.querySelector('input[type="hidden"]');
                const removeBtn = clone.querySelector('.remove-btn');

                label.textContent = tag;
                hidden.value = tag;

                removeBtn.addEventListener('click', () => {
                    tags.splice(index, 1);
                    renderTags();
                });

                wrapper.insertBefore(span, input);
            });
        }

        window[`handle${name.charAt(0).toUpperCase() + name.slice(1)}Key`] = function(e) {
            if (e.key === 'Enter' && input.value.trim() !== '') {
                e.preventDefault();
                const val = input.value.trim();
                if (!tags.includes(val)) {
                    tags.push(val);
                    renderTags();
                }
                input.value = '';
            }
        };

        renderTags();
    })();
</script>
