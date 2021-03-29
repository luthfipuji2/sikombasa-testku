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
// Route::namespace('Admin')
//     ->prefix('admin')
//     ->name('admin.')
//     //->middleware('can:manage-users')
//     ->group(function () {
//         //Route::resource('/users', 'UserController', ['except' => ['store', 'show', 'create']]);
//         Route::res('/admin', 'AdminController@index');
//         Route::get('/admin', 'AdminController@index')->name('admin_home');
//     });

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    //Route Admin
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');
        
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
 
    Route::middleware(['user'])->group(function () {
        Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user');
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
 
});

//Route Admin
