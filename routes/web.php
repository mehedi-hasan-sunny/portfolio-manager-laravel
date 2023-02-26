<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => '/user'], function () {
    Route::get('/dashboard', "App\Http\Controllers\User\DashboardController@index")->name('user.dashboard.view');
    Route::get('/links', "App\Http\Controllers\User\DashboardController@index")->name('user.links.view');
    Route::get('/experiences', "App\Http\Controllers\User\DashboardController@index")->name('user.experiences.view');
    Route::get('/educations', "App\Http\Controllers\User\DashboardController@index")->name('user.educations.view');
    Route::get('/certifications', "App\Http\Controllers\User\DashboardController@index")->name('user.certifications.view');
    Route::get('/skills', "App\Http\Controllers\User\DashboardController@index")->name('user.skills.view');
    Route::get('/testimonials', "App\Http\Controllers\User\DashboardController@index")->name('user.testimonials.view');
    Route::get('/services', "App\Http\Controllers\User\DashboardController@index")->name('user.services.view');
    Route::get('/blogs', "App\Http\Controllers\User\DashboardController@index")->name('user.blogs.view');
    Route::get('/settings', "App\Http\Controllers\User\DashboardController@index")->name('user.settings.view');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
