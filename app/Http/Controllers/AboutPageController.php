<?php

namespace App\Http\Controllers;

class AboutPageController extends Controller
{
    public function index($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        app()->setLocale(in_array($locale, ['id', 'en', 'ar'], true) ? $locale : 'id');

        return view('pages.about');
    }
}
