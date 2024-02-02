<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/projects', [\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');

Route::get('/project/{project}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');

Route::get('/projects/add', [\App\Http\Controllers\ProjectController::class, 'add'])->name('project.add');

Route::prefix('/admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('projects', ProjectAdminController::class);
    });