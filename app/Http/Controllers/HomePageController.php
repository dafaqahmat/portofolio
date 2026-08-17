<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index($locale = null)
    {
        $locale = $locale ?: app()->getLocale();
        app()->setLocale(in_array($locale, ['id', 'en', 'ar'], true) ? $locale : 'id');

        $featuredProjects = Project::published()
            ->featured()
            ->ordered()
            ->take(3)
            ->get();
        saya errorkan belajar ci cd
        return view('pages.home', compact('featuredProjects'));
    }
}
