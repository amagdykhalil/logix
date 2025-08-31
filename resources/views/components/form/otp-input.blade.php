@props(['name' => 'otp', 'length' => 5])

<div class="flex gap-[15px] justify-center items-center flex-wrap" x-data="otpInput()">
    @for ($i = 0; $i < $length; $i++)
        <input type="text" name="{{ $name }}[]" maxlength="1" class="otp-digit" data-index="{{ $i }}"
            x-ref="digit{{ $i }}" @input="handleInput($event, {{ $i }})"
            @keydown="handleKeydown($event, {{ $i }})" @paste="handlePaste($event)"
            @focus="handleFocus($event, {{ $i }})" autocomplete="off">
    @endfor
</div>

<style>
    .otp-digit {
        width: 94px;
        height: 45px;
        border: 1px solid #4754672E;
        color: #6C7278;
        background: #F8F8F8;
        border-radius: 8px;
        padding: 16px;
        font-family: Alexandria, sans-serif;
        font-weight: 400;
        font-style: normal;
        font-size: 14px;
        line-height: 22px;
        letter-spacing: 0%;
        text-align: center;
        outline: none;
        transition: all 0.3s ease;
    }

    .otp-digit:focus {
        border-color: #84B156;
        background: #FFFFFF;
        color: black;
        box-shadow: 0 0 0 2px rgba(132, 177, 86, 0.1);
    }

    /* Mobile responsive styles */
    @media (max-width: 768px) {
        .otp-digit {
            width: 50px;
            height: 50px;
            padding: 8px;
            font-size: 16px;
            line-height: 1.2;
        }
    }

    @media (max-width: 480px) {
        .otp-digit {
            width: 45px;
            height: 45px;
            padding: 6px;
            font-size: 14px;
        }
    }

    @media (max-width: 360px) {
        .otp-digit {
            width: 40px;
            height: 40px;
            padding: 4px;
            font-size: 12px;
        }
    }
</style>

<script>
    function otpInput() {
        return {
            handleInput(event, index) {
                const input = event.target;
                const value = input.value;

                // Only allow numbers
                if (!/^\d*$/.test(value)) {
                    input.value = '';
                    return;
                }

                // Move to next input if value is entered
                if (value && index < 4) {
                    this.$refs[`digit${index + 1}`].focus();
                }
            },

            handleKeydown(event, index) {
                // Handle backspace
                if (event.key === 'Backspace' && !event.target.value && index > 0) {
                    this.$refs[`digit${index - 1}`].focus();
                }
            },

            handleFocus(event, index) {
                const input = event.target;

                // If the input already has a value, select all text
                if (input.value) {
                    // Use setTimeout to ensure the focus is fully established before selecting
                    setTimeout(() => {
                        input.select();
                    }, 0);
                }
            },

            handlePaste(event) {
                event.preventDefault();
                const pastedData = event.clipboardData.getData('text/plain');
                const digits = pastedData.replace(/\D/g, '').slice(0, 5);

                // Fill the inputs with pasted data
                for (let i = 0; i < digits.length; i++) {
                    if (this.$refs[`digit${i}`]) {
                        this.$refs[`digit${i}`].value = digits[i];
                    }
                }

                // Focus the next empty input or the last one
                const nextIndex = Math.min(digits.length, 4);
                if (this.$refs[`digit${nextIndex}`]) {
                    this.$refs[`digit${nextIndex}`].focus();
                }
            }
        }
    }
</script>
