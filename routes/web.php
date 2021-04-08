<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
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
        //Route::get('/bank', [App\Http\Controllers\Admin\BankController::class, 'index'])->name('bank');
        //Route::get('/bank/{bank}/edit', [App\Http\Controllers\Admin\BankController::class, 'edit'])->name('/bank/{bank}/edit');
        Route::resource('bank', 'App\Http\Controllers\Admin\BankController');
        //Route::get('/bank-create', [App\Http\Controllers\Admin\BankController::class, 'create'])->name('bank');
        //Route::delete('/bank-{$id_bank}', [App\Http\Controllers\Admin\BankController::class, 'destroyUsers'])->name('bank');


        // Route::post('/users', [App\Http\Controllers\Admin\AdminController::class, 'storeUsers'])->name('users');
        // Route::delete('/users/{user}', [App\Http\Controllers\Admin\AdminController::class, 'destroyUsers'])->name('users');
        // Route::get('/users/{user}/edit', [App\Http\Controllers\Admin\AdminController::class, 'editUsers'])->name('users');
        // Route::patch('/users/{user}', [App\Http\Controllers\Admin\AdminController::class, 'updateUsers'])->name('users');

    });


    // Route::middleware(['admin'])->group(function () {
    //     Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admin');
    // });
    Route::middleware(['translator'])->group(function () {
        Route::get('/translator', [App\Http\Controllers\Admin\TranslatorController::class, 'index'])->name('translator');
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

