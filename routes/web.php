<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => '/admin'], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard.view');

    Route::get('/links', function () {
        return view('admin.dashboard');
    })->name('admin.links.view');

    Route::get('/experiences', function () {
        return view('admin.dashboard');
    })->name('admin.experiences.view');

    Route::get('/educations', function () {
        return view('admin.dashboard');
    })->name('admin.educations.view');

    Route::get('/certifications', function () {
        return view('admin.dashboard');
    })->name('admin.certifications.view');

    Route::get('/skills', function () {
        return view('admin.dashboard');
    })->name('admin.skills.view');

    Route::get('/testimonials', function () {
        return view('admin.dashboard');
    })->name('admin.testimonials.view');

    Route::get('/services', function () {
        return view('admin.dashboard');
    })->name('admin.services.view');

    Route::get('/blogs', function () {
        return view('admin.dashboard');
    })->name('admin.blogs.view');
    
    Route::get('/settings', function () {
        return view('admin.dashboard');
    })->name('admin.settings.view');

});

