<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $baseUrl = config('app.url');
        $projects = Project::published()->ordered()->get();

        $pages = [
            'home' => ['id' => '/', 'en' => '/en', 'ar' => '/ar'],
            'about' => ['id' => '/tentang', 'en' => '/en/about', 'ar' => '/ar/نبذة-عني'],
            'experience' => ['id' => '/pengalaman', 'en' => '/en/experience', 'ar' => '/ar/الخبرات'],
            'projects' => ['id' => '/project', 'en' => '/en/projects', 'ar' => '/ar/المشاريع'],
            'academic' => ['id' => '/akademik', 'en' => '/en/academic', 'ar' => '/ar/أكاديمي'],
            'contact' => ['id' => '/kontak', 'en' => '/en/contact', 'ar' => '/ar/اتصل-بي'],
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . PHP_EOL;
        $xml .= '        xmlns:xhtml="http://www.w3.org/1999/xhtml">' . PHP_EOL;

        // Static pages
        foreach ($pages as $page => $urls) {
            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . htmlspecialchars($baseUrl . $urls['id']) . '</loc>' . PHP_EOL;
            $xml .= '    <xhtml:link rel="alternate" hreflang="id" href="' . htmlspecialchars($baseUrl . $urls['id']) . '"/>' . PHP_EOL;
            $xml .= '    <xhtml:link rel="alternate" hreflang="en" href="' . htmlspecialchars($baseUrl . $urls['en']) . '"/>' . PHP_EOL;
            $xml .= '    <xhtml:link rel="alternate" hreflang="ar" href="' . htmlspecialchars($baseUrl . $urls['ar']) . '"/>' . PHP_EOL;
            $xml .= '    <xhtml:link rel="alternate" hreflang="x-default" href="' . htmlspecialchars($baseUrl . $urls['id']) . '"/>' . PHP_EOL;
            $xml .= '    <lastmod>' . now()->toW3cString() . '</lastmod>' . PHP_EOL;
            $xml .= '    <changefreq>weekly</changefreq>' . PHP_EOL;
            $xml .= '    <priority>' . ($page === 'home' ? '1.0' : '0.8') . '</priority>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
        }

        // Project detail pages
        foreach ($projects as $project) {
            $xml .= '  <url>' . PHP_EOL;
            $xml .= '    <loc>' . htmlspecialchars($baseUrl . '/project/' . $project->slug_id) . '</loc>' . PHP_EOL;
            $xml .= '    <xhtml:link rel="alternate" hreflang="id" href="' . htmlspecialchars($baseUrl . '/project/' . $project->slug_id) . '"/>' . PHP_EOL;
            $xml .= '    <xhtml:link rel="alternate" hreflang="en" href="' . htmlspecialchars($baseUrl . '/en/projects/' . $project->slug_en) . '"/>' . PHP_EOL;
            $xml .= '    <xhtml:link rel="alternate" hreflang="ar" href="' . htmlspecialchars($baseUrl . '/ar/المشاريع/' . $project->slug_ar) . '"/>' . PHP_EOL;
            $xml .= '    <xhtml:link rel="alternate" hreflang="x-default" href="' . htmlspecialchars($baseUrl . '/project/' . $project->slug_id) . '"/>' . PHP_EOL;
            $xml .= '    <lastmod>' . $project->updated_at->toW3cString() . '</lastmod>' . PHP_EOL;
            $xml .= '    <changefreq>monthly</changefreq>' . PHP_EOL;
            $xml .= '    <priority>0.7</priority>' . PHP_EOL;
            $xml .= '  </url>' . PHP_EOL;
        }

        $xml .= '</urlset>' . PHP_EOL;

        return response($xml, 200)->header('Content-Type', 'application/xml');
    }
}
