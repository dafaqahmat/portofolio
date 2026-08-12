<?php

if (! function_exists('localized_url')) {
    function localized_url(string $page, ?string $locale = null, ?string $suffix = null): string
    {
        $locale ??= app()->getLocale();

        $paths = [
            'id' => [
                'home' => '',
                'about' => 'tentang',
                'experience' => 'pengalaman',
                'projects' => 'project',
                'academic' => 'akademik',
                'contact' => 'kontak',
            ],
            'en' => [
                'home' => 'en',
                'about' => 'en/about',
                'experience' => 'en/experience',
                'projects' => 'en/projects',
                'academic' => 'en/academic',
                'contact' => 'en/contact',
            ],
            'ar' => [
                'home' => 'ar',
                'about' => 'ar/نبذة-عني',
                'experience' => 'ar/الخبرات',
                'projects' => 'ar/المشاريع',
                'academic' => 'ar/أكاديمي',
                'contact' => 'ar/اتصل-بي',
            ],
        ];

        $path = $paths[$locale][$page] ?? $paths['id'][$page] ?? '';

        if ($suffix !== null && $suffix !== '') {
            $path .= '/' . ltrim($suffix, '/');
        }

        return url($path);
    }
}

if (! function_exists('localized_current_url')) {
    function localized_current_url(string $locale): string
    {
        $route = request()->route();
        $action = $route?->getActionName();
        $routePage = [
            'App\\Http\\Controllers\\HomePageController@index' => 'home',
            'App\\Http\\Controllers\\AboutPageController@index' => 'about',
            'App\\Http\\Controllers\\ExperiencePageController@index' => 'experience',
            'App\\Http\\Controllers\\ProjectsPageController@index' => 'projects',
            'App\\Http\\Controllers\\ProjectsPageController@show' => 'projects',
            'App\\Http\\Controllers\\AcademicPageController@index' => 'academic',
            'App\\Http\\Controllers\\ContactPageController@index' => 'contact',
        ];

        if (isset($routePage[$action])) {
            $page = $routePage[$action];
            $suffix = null;

            if ($page === 'projects' && str_ends_with((string) $action, '@show')) {
                $currentSlug = $route?->parameter('slug');
                $currentLocale = app()->getLocale();

                if ($currentSlug) {
                    $project = \App\Models\Project::where("slug_{$currentLocale}", $currentSlug)->first();
                    if ($project) {
                        $targetField = "slug_{$locale}";
                        $suffix = $project->{$targetField} ?: $project->slug_id;
                    }
                }
            }

            return localized_url($page, $locale, $suffix);
        }

        $segments = array_values(array_filter(explode('/', trim(request()->path(), '/'))));
        $currentLocale = 'id';

        if (isset($segments[0]) && in_array($segments[0], ['en', 'ar'], true)) {
            $currentLocale = array_shift($segments);
        }

        $pageSegments = [
            'id' => ['tentang' => 'about', 'pengalaman' => 'experience', 'project' => 'projects', 'akademik' => 'academic', 'kontak' => 'contact'],
            'en' => ['about' => 'about', 'experience' => 'experience', 'projects' => 'projects', 'academic' => 'academic', 'contact' => 'contact'],
            'ar' => ['نبذة-عني' => 'about', 'الخبرات' => 'experience', 'المشاريع' => 'projects', 'أكاديمي' => 'academic', 'اتصل-بي' => 'contact'],
        ];

        $page = 'home';
        $suffix = null;
        if (isset($segments[0])) {
            $page = $pageSegments[$currentLocale][$segments[0]] ?? 'home';
            $suffix = $page === 'projects' && isset($segments[1]) ? $segments[1] : null;
        }

        return localized_url($page, $locale, $suffix);
    }
}
