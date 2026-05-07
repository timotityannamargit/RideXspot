<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;

// --- PUBLIKUS ÚTVONALAK ---
Route::get('/', function () {
    return view('pages.home');
})->name("home");
Route::get('/szolgaltatasok', [ServiceController::class, 'index'])->name("szolgaltatasok");
Route::get('/kapcsolat', function () {
    return view('pages.kapcsolat');
})->name("kapcsolat");
Route::get('/tovabbi_partnereink', function () {
    return view('pages.partnerek');
})->name("tovabbi_partnereink");
Route::get('/rolunk', function () {
    return view('pages.rolunk');
})->name("rolunk");

Route::get('/autok', [CarController::class, 'index'])->name("autok");
Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking');

Route::post('/booking', [AppointmentController::class, 'booking'])->name('appointment.booking');


// --- Admin útvonalak ---
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('pages.admin.login');
    })->name('admin.login');
Route::get('/register', function () {
        return view('pages.admin.register');
    })->name('admin.register');
    Route::post('/register', [LoginController::class, 'register'])->name('admin.register.submit');
    Route::get('/health', function () {
        return response()->json(['status' => 'ok']);
    })->name('health');
    Route::post('/login', [LoginController::class, 'login'])->name("login.submit");
    Route::group(['middleware' => ['auth', 'verified']], function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::group(['prefix' => 'cars'], function () {
            Route::get('/', [CarController::class, 'index'])->name('admin.cars');
            Route::get('/list', [CarController::class, 'list'])->name('admin.cars.list');
            Route::get('/create', [CarController::class, 'create'])->name('admin.cars.create');
            Route::post('/', [CarController::class, 'store'])->name('admin.cars.store');
            Route::get('/edit/{id}', [CarController::class, 'edit'])->name('admin.cars.edit');
            Route::put('/{id}', [CarController::class, 'update'])->name('admin.cars.update');
            Route::delete('/{id}', [CarController::class, 'destroy'])->name('admin.cars.destroy');
        });
        Route::group(['prefix' => 'appointments'], function () {
            Route::get('/', [AppointmentController::class, 'index'])->name('admin.appointments');
            Route::get('/list', [AppointmentController::class, 'list'])->name('admin.appointments.list');
            Route::get('/create', [AppointmentController::class, 'create'])->name('admin.appointments.create');
            Route::post('/', [AppointmentController::class, 'store'])->name('admin.appointments.store');
            Route::get('/edit/{id}', [AppointmentController::class, 'edit'])->name('admin.appointments.edit');
            Route::put('/{id}', [AppointmentController::class, 'update'])->name('admin.appointments.update');
            Route::delete('/{id}', [AppointmentController::class, 'destroy'])->name('admin.appointments.destroy');
        });
    });
    Route::get('/unverified', function () {
        return redirect()->route('admin.login')->with('alert', 'unverified');
    })->name('verification.notice');
});


