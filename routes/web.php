<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;




Route::middleware(['web', \App\Http\Middleware\SetLocale::class])->group(function () {

    Route::post('/logout', function () { 
    })->name('logout');


    Route::get('/', function () {
        return view('pages.landing.index');
    })->name('home');


    Route::get('/dashboard', function () {
        return view('pages.index');
    })->name('dashboard');

    Route::get('/calls', function () {
        return view('pages.calls');
    })->name('calls');

    Route::get('/stats', function () {
        return view('pages.staticts');
    })->name('stats');

    Route::get('/package-customization', function () {
        return view('pages.package-customization');
    })->name('package-customization');

    Route::get('/subscriptions', function () {
        return view('pages.subscriptions');
    })->name('subscriptions');





    Route::get('/team', function () {
        return view('pages.team-member');
    })->name('team');

    Route::get('/tutorial', function () {
        return view('pages.tutorial');
    })->name('tutorial');

    Route::get('/download', function () {
        // return view('pages.download');
    })->name('download');

    Route::get('/settings', function () {
        return view('pages.settings');
    })->name('settings');


    Route::get('/auth', function () {
        return view('pages.auth.auth');
    })->name('auth');


    Route::get('/appointment-booking', function () {
        return view('pages.auth.appointment-booking');
    })->name('appointment-booking');
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
