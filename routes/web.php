<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Translator\TranslatorController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

 
Route::get('/', function () {
    return view('welcome');
});
 

Auth::routes();

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    //Route Admin
    Route::middleware(['admin'])->group(function () {
        
        Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin');
        
        //Route Users & Permissions
        Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('users');
        Route::get('/users/create', [App\Http\Controllers\Admin\AdminController::class, 'createUsers'])->name('users');
        Route::post('/users', [App\Http\Controllers\Admin\AdminController::class, 'storeUsers'])->name('users');
        Route::delete('/users/{user}', [App\Http\Controllers\Admin\AdminController::class, 'destroyUsers'])->name('users');
        Route::get('/users/{user}/edit', [App\Http\Controllers\Admin\AdminController::class, 'editUsers'])->name('users');
        Route::patch('/users/{user}', [App\Http\Controllers\Admin\AdminController::class, 'updateUsers'])->name('users');

    });


    // Route::middleware(['admin'])->group(function () {
    //     Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admin');
    // });
    Route::middleware(['translator'])->group(function () {
        Route::get('/translator', [App\Http\Controllers\Translator\TranslatorController::class, 'index']);
        Route::get('/profile', [App\Http\Controllers\Translator\TranslatorController::class, 'profile']);
        Route::get('/find-a-job', [App\Http\Controllers\Translator\TranslatorController::class, 'find']);
        Route::get('/to-do-list', [App\Http\Controllers\Translator\TranslatorController::class, 'todo']);
        Route::get('/review', [App\Http\Controllers\Translator\TranslatorController::class, 'review']);
        Route::get('/career', [App\Http\Controllers\Translator\TranslatorController::class, 'career']);
    });
 
    Route::middleware(['klien'])->group(function () {
        Route::get('/klien', [App\Http\Controllers\Admin\KlienController::class, 'index'])->name('klien');
    });
    
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
 
});


//Route Admin
//Route Admin
// Route::get('/adm', function () {
//     return view('layouts.admin.dashboard');
// });

