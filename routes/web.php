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

Route::get('/bejelentkezes', function () {
    return view('pages.bejelentkezes');
})->name("bejelentkezes");



Route::get('/kijelentkezes', function () {
    Auth::logout();
    return redirect()->route('home');
});

// --- VÉDETT ÚTVONALAK ---
//Route::middleware(['auth'])->group(function () {
Route::get('/autok', [CarController::class, 'index'])->name("autok");
Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking');
Route::post('/booking', function (Request $request) {
    return redirect()->route('home')->with('success', 'Sikeres foglalás!');
})->name('booking.store');

Route::resource('cars', CarController::class);
Route::resource('appointment', AppointmentController::class);
Route::resource('services', ServiceController::class);
Route::resource('repairs', RepairController::class);
//});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('pages.admin.login');
    })->name('admin.login');
    Route::post('/register', [UserController::class, 'store'])->name('register.submit');
    Route::get('/health', function () {
        return response()->json(['status' => 'ok']);
    })->name('health');
    Route::post('/login', [LoginController::class, 'login'])->name("login.submit");
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::group(['prefix' => 'cars'], function () {
            Route::get('/', [CarController::class, 'index'])->name('admin.cars');
            Route::get('/list', [CarController::class, 'list'])->name('admin.cars.list');
        });
    });
});
