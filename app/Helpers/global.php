<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

if(!function_exists('logo')){
    function logo(int $w = 40, int $h=40, string $class=""){
        return '<img src='.asset('commons/images/logo.png').' class="'.$class.'" width="'.$w.'" height="'.$h.'" />';
    }
}

function formatDate($date){
    return date('jS M, Y', strtotime($date));
}

function isNotAuthed() : void {
    Route::get('login',[AuthController::class, 'login'])->name('auth.login');
    Route::post('login',[AuthController::class, 'logMe'])->name('auth.log-me');
    Route::get('register',[AuthController::class, 'register'])->name('auth.register');
    Route::post('register',[AuthController::class, 'registerMe'])->name('auth.register-me');
    Route::get('logout',[AuthController::class, 'logout'])->name('auth.logout');
}

function isAuthed($guard = 'auth:web') : void {
    Route::middleware($guard)->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::prefix('requests')->group(function(){
           Route::get('/', [RequestController::class, 'index'])->name('admin.request.index');
           Route::get('/create', [RequestController::class, 'create'])->name('admin.request.create');
           Route::post('/store', [RequestController::class, 'store'])->name('admin.request.store');
           Route::get('/show/{request}', [RequestController::class, 'show'])->name('admin.request.show');
           Route::delete('/destroy/{request}', [RequestController::class, 'destroy'])->name('admin.request.destroy');
        });

        
    });
}
