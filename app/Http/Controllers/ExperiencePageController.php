<?php

namespace App\Http\Controllers;

class ExperiencePageController extends Controller
{
    public function index($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        app()->setLocale(in_array($locale, ['id', 'en', 'ar'], true) ? $locale : 'id');

        return view('pages.experience');
    }
}
