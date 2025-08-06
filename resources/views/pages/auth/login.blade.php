@extends('layouts.auth')

@php

@endphp

@push('styles')
@endpush


@section('authContent')
    <div class='login flex-1 flex flex-col justify-start'>
        <div class='flex-1 flex '>
            <div class='h-[500px]  flex-1'>
                <form class='text-black space-y-6 '>
                    <x-form.input-field label="البريد الإلكتروني" name="email" type='email' value=""
                        placeholder="yosra@gmail.com" />
                    <x-form.input-field label="البريد الإلكتروني" name="email" type='email' value=""
                        placeholder="yosra@gmail.com" />

                    <a href='' class='block text-left text-[#E9A760] text-sm hover:underline'>نسيت كلمة المرور ؟</a>
                    <x-form.button class="">
                        تسجيل دخول
                    </x-form.button>
                    <p class='text-[#8696BB] text-center text-sm'>أو</p>

                </form>
                <x-form.button class=" !bg-gray-100 hover:!bg-gray-200 !mt-5">
                    <span class='text-gray-600'>سجل دخول عبر جوجول</span>
                    <img src="./assets/icons/google.svg" alt="login">
                </x-form.button>
            </div>
        </div>
    </div>
@endsection


@section('sideContent')
@endsection
