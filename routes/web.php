<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TranslatorController;
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
        Route::resource('bank', 'App\Http\Controllers\Admin\BankController');
        Route::get('/bank/{bank}/delete', 'App\Http\Controllers\Admin\BankController@destroy');
        Route::resource('users', 'App\Http\Controllers\Admin\UsersController');
        Route::resource('profile', 'App\Http\Controllers\Admin\ProfileController');
        Route::resource('daftar-admin', 'App\Http\Controllers\Admin\AdminController');
        

        // Route::post('/users', [App\Http\Controllers\Admin\AdminController::class, 'storeUsers'])->name('users');
        // Route::delete('/users/{user}', [App\Http\Controllers\Admin\AdminController::class, 'destroyUsers'])->name('users');
        // Route::get('/users/{user}/edit', [App\Http\Controllers\Admin\AdminController::class, 'editUsers'])->name('users');
        // Route::patch('/users/{user}', [App\Http\Controllers\Admin\AdminController::class, 'updateUsers'])->name('users');

    });

    Route::middleware(['translator'])->group(function () {
        Route::get('/translator', [App\Http\Controllers\Admin\TranslatorController::class, 'index']);
        Route::get('/profile', [App\Http\Controllers\Admin\TranslatorController::class, 'profile']);
        Route::get('/find-a-job', [App\Http\Controllers\Admin\TranslatorController::class, 'find']);
        Route::get('/to-do-list', [App\Http\Controllers\Admin\TranslatorController::class, 'todo']);
        Route::get('/review', [App\Http\Controllers\Admin\TranslatorController::class, 'review']);
    });
 
    Route::middleware(['klien'])->group(function () {
        Route::resource('/biodata', 'App\Http\Controllers\Admin\BiodataKlienController');
        //biodata klien
        // Route::get('/klien', [App\Http\Controllers\Admin\KlienController::class, 'index'])->name('klien');
        // Route::get('/klien/create', [App\Http\Controllers\Admin\KlienController::class, 'create'])->name('klien');
        // Route::get('/klien/{klien}', [App\Http\Controllers\Admin\KlienController::class, 'show']);
        // Route::get('/klien', [App\Http\Controllers\Admin\KlienController::class, 'store']);
        Route::resource('menu-order', 'App\Http\Controllers\Admin\OrderMenuController');


        // Route::get('/klien', [App\Http\Controllers\Admin\KlienController::class, 'dashboard'])->name('klien');
        // Route::get('/menu-order', [App\Http\Controllers\Admin\KlienController::class, 'index'])->name('menu-order');
        // Route::post('/order-teks', [App\Http\Controllers\Admin\KlienController::class, 'orderTeks'])->name('order-teks');
    });
    
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
 
});