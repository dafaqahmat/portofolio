<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

// Halaman Utama (Bahasa Indonesia sebagai Default SEO)
Route::get('/', function () {
    App::setLocale('id');
    return view('welcome');
});

// Halaman Bahasa Lain (Inggris dan Arab)
Route::get('/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'ar'])) {
        abort(404);
    }
    App::setLocale($locale);
    return view('welcome');
});
