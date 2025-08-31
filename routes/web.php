<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

Route::middleware(['web', \App\Http\Middleware\SetLocale::class])->group(function () {

    Route::get('/', function () {
        return view('pages.landing.index');
    })->name('home');

    Route::get('/login', function () {
        return view('pages.auth.login');
    })->name('login');

    Route::get('/signup', function () {
        return view('pages.auth.signup');
    })->name('signup');

	Route::get('/forgot-password', function () {
        return view('pages.auth.forgot-password');
    })->name('forgot-password');

});



// تغيير اللغة
Route::post('/switch-language', function (Request $request) {
    $lang = $request->input('language');
    if (in_array($lang, ['en', 'ar'])) {
        Session::put('locale', $lang);
        App::setLocale($lang);
    }
    return redirect()->back();
})->name('language.switch');

// تبديل الوضع (light/dark)
Route::post('/switch-theme', function () {
    $current = Session::get('theme', 'light');
    Session::put('theme', $current === 'dark' ? 'light' : 'dark');
    return redirect()->back();
})->name('theme.switch');
