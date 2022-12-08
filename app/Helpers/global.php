<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DrugController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\PatientController;
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

function age($date_of_birth = null){
    if(!is_null($date_of_birth)){
        $dob = new DateTime($date_of_birth);
        $now = new DateTime();
        $difference = $now->diff($dob);
        $age = $difference->y;
        return  $age;
    }
    return 0;
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
           Route::post('/approve', [RequestController::class, 'approve'])->name('admin.request.approve');
           Route::post('/cost', [RequestController::class, 'cost'])->name('admin.request.cost');
           Route::post('/delivered', [RequestController::class, 'deliver'])->name('admin.request.deliver');
           Route::post('/cancel', [RequestController::class, 'cancel'])->name('admin.request.cancel');
        });

        Route::prefix('patients')->group(function(){
            Route::get('/', [PatientController::class, 'index'])->name('admin.patient.index');
            Route::post('/', [PatientController::class, 'store'])->name('admin.patient.store');
            Route::post('/create', [PatientController::class, 'create'])->name('admin.patient.create');
            Route::get('/show/{patient}', [PatientController::class, 'show'])->name('admin.patient.show');
            Route::delete('/destroy/{patient}', [PatientController::class, 'destroy'])->name('admin.patient.destroy');
        });

        Route::prefix('facilities')->group(function(){
            Route::get('/', [FacilityController::class, 'index'])->name('admin.facility.index');
            Route::post('/', [FacilityController::class, 'store'])->name('admin.facility.store');
            Route::post('/create', [FacilityController::class, 'create'])->name('admin.facility.create');
            Route::get('/show/{facility}', [FacilityController::class, 'show'])->name('admin.facility.show');
            Route::delete('/destroy/{facility}', [FacilityController::class, 'destroy'])->name('admin.facility.destroy');
        });

        Route::prefix('drugs')->group(function(){
            Route::get('/', [DrugController::class, 'index'])->name('admin.drug.index');
            Route::post('/', [DrugController::class, 'store'])->name('admin.drug.store');
            Route::post('/create', [DrugController::class, 'create'])->name('admin.drug.create');
            Route::get('/show/{drug}', [DrugController::class, 'show'])->name('admin.drug.show');
            Route::delete('/destroy/{drug}', [DrugController::class, 'destroy'])->name('admin.drug.destroy');
        });

        Route::prefix('inventory')->group(function(){
            Route::get('/', [InventoryController::class, 'index'])->name('admin.inventory.index');
            Route::post('/', [InventoryController::class, 'store'])->name('admin.inventory.store');
            Route::post('/create', [InventoryController::class, 'create'])->name('admin.inventory.create');
            Route::get('/show/{item}', [InventoryController::class, 'show'])->name('admin.inventory.show');
            Route::delete('/destroy/{item}', [InventoryController::class, 'destroy'])->name('admin.inventory.destroy');
        });

    });
}
