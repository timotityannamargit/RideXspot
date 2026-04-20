<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\CarController;
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

Route::post('/bejelentkezes', function (Request $request) {
    $users = [
        "tesztelek@gmail.com" => '$2y$12$uT1uJJJ5BtT2ewleShU9D.LJWzzT.b2O5QxsxkKFu5ecnDUhjy2nK',
        "halo@gmail.com" => '$2y$12$.IARkVVfkYqGfFW4WpV8buQAHVvFDlCE8ZAF7ejoeKFmupe0Sombe',
        "timotityanna2006@gmail.com" => '$2y$12$gZuUxV0GkcN0TRbqFOLzN.qdcoAffQc82TRujeNEyhuzCX0QOgthe',
        "csa@gmail.com" => '$2y$12$h6AdRY.jr8TuoUSrvx1PMekLq9rUoXfyyvovndKhpxLl05sjg5.gW'
    ];

    if (isset($users[$request->email]) && Hash::check($request->password, $users[$request->email])) {
        $dbUser = User::where('email', $request->email)->first();
        if ($dbUser) {
            Auth::login($dbUser); // Ez a sor engedélyezi a hozzáférést
            return redirect()->route('autok');
        }
    }
    return redirect()->route('bejelentkezes')->with('alert', "badpass");
})->name("bejelentkezes.submit");

Route::get('/kijelentkezes', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

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
