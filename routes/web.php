<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuditionController;
use App\Http\Controllers\WriterSubmissionController;

/* admin controller */
use App\Http\Controllers\Admin\ProductionController;
use App\Http\Controllers\Admin\ProductionCastController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\AuditionController as AdminAuditionController;
use App\Http\Controllers\Admin\WriterSubmissionController as AdminWriterSubmissionController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about-us');

Route::get('/our-team', function () {
    return view('our_team');
})->name('our-team');

Route::get('/team-detail', function () {
    return view('team_detail');
})->name('team-detail');

Route::get('/our-services', function () {
    return view('our_services');
})->name('our-services');

Route::get('/bts-gallery', [ProjectController::class, 'getAllGalleryImages'])->name('bts-gallery');

Route::get('/our-projects', [ProjectController::class, 'getAllProjects'])->name('our-projects');
Route::get('/project-detail/{slug}', [ProjectController::class, 'projectDetail'])->name('project-detail');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::post('/contact/store',[ContactController::class, 'store'])->name('contact.store');

Route::get('/audition', [AuditionController::class, 'index'])->name('audition');
Route::post('/audition', [AuditionController::class, 'store'])->name('audition.store');

Route::get('/script-submission', [WriterSubmissionController::class, 'index'])->name('script.submission');
Route::post('/script-submission', [WriterSubmissionController::class, 'store'])->name('script.store');


/* admin routes */
Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('productions', ProductionController::class);
        Route::resource('production-casts', ProductionCastController::class);
        Route::resource('galleries', GalleryController::class);
        Route::resource('settings', SettingController::class);
        Route::resource('contact-us', ContactUsController::class);
        Route::resource('contents', ContentController::class);
        Route::get('auditions', [AdminAuditionController::class, 'index'])->name('auditions.index');
        Route::get('auditions/{id}/video', [AdminAuditionController::class, 'video'])->name('auditions.video');
        Route::get('auditions/{id}/download-video', [AdminAuditionController::class, 'downloadVideo'])->name('auditions.downloadVideo');
        Route::get('auditions/{id}/show', [AdminAuditionController::class, 'show'])->name('auditions.show');
        Route::get('script-submissions', [AdminWriterSubmissionController::class, 'index'])->name('script-submissions.index');
        Route::get('script-submissions/{id}/view-script', [AdminWriterSubmissionController::class, 'viewScript'])->name('script-submissions.viewScript');
        Route::get('script-submissions/{id}/download-script', [AdminWriterSubmissionController::class, 'downloadScript'])->name('script-submissions.downloadScript');
        Route::get('script-submissions/{id}/show', [AdminWriterSubmissionController::class, 'show'])->name('script-submissions.show');
    });
