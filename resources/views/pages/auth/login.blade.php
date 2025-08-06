@extends('layouts.auth')

@php

@endphp

@push('styles')
@endpush


@section('authContent')
    <div class='login'>
        <x-auth-toggle :login="true" />
        <p class='text-black'>Login Content Loaded</p>
        <p class='text-black'>Login Content Loaded</p>
    </div>
@endsection
