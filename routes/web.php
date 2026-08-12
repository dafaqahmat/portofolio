<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ExperiencePageController;
use App\Http\Controllers\ProjectsPageController;
use App\Http\Controllers\AcademicPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/', [HomePageController::class, 'index']);
Route::get('/tentang', [AboutPageController::class, 'index']);
Route::get('/pengalaman', [ExperiencePageController::class, 'index']);
Route::get('/project', [ProjectsPageController::class, 'index']);
Route::get('/project/{slug}', [ProjectsPageController::class, 'show'])
    ->where('slug', '[^/]+');
Route::get('/akademik', [AcademicPageController::class, 'index']);
Route::get('/kontak', [ContactPageController::class, 'index']);
Route::post('/kontak', [ContactPageController::class, 'send'])->middleware('throttle:5,10');

Route::prefix('en')->group(function () {
    Route::get('/', [HomePageController::class, 'index']);
    Route::get('/about', [AboutPageController::class, 'index']);
    Route::get('/experience', [ExperiencePageController::class, 'index']);
    Route::get('/projects', [ProjectsPageController::class, 'index']);
    Route::get('/projects/{slug}', [ProjectsPageController::class, 'show'])
        ->where('slug', '[^/]+');
    Route::get('/academic', [AcademicPageController::class, 'index']);
    Route::get('/contact', [ContactPageController::class, 'index']);
    Route::post('/contact', [ContactPageController::class, 'send'])->middleware('throttle:5,10');
});

Route::prefix('ar')->group(function () {
    Route::get('/', [HomePageController::class, 'index']);
    Route::get('/نبذة-عني', [AboutPageController::class, 'index']);
    Route::get('/الخبرات', [ExperiencePageController::class, 'index']);
    Route::get('/المشاريع', [ProjectsPageController::class, 'index']);
    Route::get('/المشاريع/{slug}', [ProjectsPageController::class, 'show'])
        ->where('slug', '[^/]+');
    Route::get('/أكاديمي', [AcademicPageController::class, 'index']);
    Route::get('/اتصل-بي', [ContactPageController::class, 'index']);
    Route::post('/اتصل-بي', [ContactPageController::class, 'send'])->middleware('throttle:5,10');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('projects', ProjectController::class)->except(['show']);
    Route::delete('projects/delete-image', [ProjectController::class, 'deleteImage'])
        ->name('projects.delete-image');
});
