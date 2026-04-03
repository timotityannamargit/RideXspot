<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.home');
})->name("home");
// Cars
Route::resource('cars', CarController::class);

// Appointments
Route::resource('cappointments', AppointmentController::class);

// Services
Route::resource('services', ServiceController::class);

// Repairs
Route::resource('repairs', RepairController::class);
Route::middleware(['auth'])->group(function () {

    Route::resource('cars', CarController::class);
    Route::resource('appointment', AppointmentController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('repairs', RepairController::class);
});



Route::get('/bejelentkezes', function () {
    return view('pages.bejelentkezes');
})->name("bejelentkezes");

/*Route::post('/contact', function (Request $request) {
    Storage::append('contact_log.txt', json_encode($request->all()));
    return redirect()
        ->route('contact')
        ->with('success', true);
})->name('contact.submit');*/

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

Route::get('/autok', function(){
    return view('pages.autok');
})->name("autok");

Route::post('/bejelentkezes', function (Request $request) {
    $users = [
        "tesztelek@gmail.com" => '$2y$12$uT1uJJJ5BtT2ewleShU9D.LJWzzT.b2O5QxsxkKFu5ecnDUhjy2nK', //Kismacsak123
        "halo@gmail.com" => '$2y$12$.IARkVVfkYqGfFW4WpV8buQAHVvFDlCE8ZAF7ejoeKFmupe0Sombe', //kiskutya456
        "timotityanna2006@gmail.com" => '$2y$12$gZuUxV0GkcN0TRbqFOLzN.qdcoAffQc82TRujeNEyhuzCX0QOgthe', //na678
        "csa@gmail.com" => '$2y$12$h6AdRY.jr8TuoUSrvx1PMekLq9rUoXfyyvovndKhpxLl05sjg5.gW' //ezjo987
    ];
    if (!isset($users[$request->email])) {
        return redirect()
            ->route('bejelentkezes')
            ->with('alert', 'badpass');
    }
    if (Hash::check($request->password, $users[$request->email])) {
        return redirect()
        ->route('bejelentkezes')
        ->with('alert', "success");
    }
    return redirect()
        ->route('bejelentkezes')
        ->with('alert', "badpass");
})->name("bejelentkezes.submit");

Route::get('/booking', function () {
    return view('pages.booking');
})->name('booking');

Route::post('/booking', function (\Illuminate\Http\Request $request) {
    // Itt elmentheted az adatokat az adatbázisba
    // Például Booking::create($request->all());

    // Flash üzenet, amit a főoldalon mutatunk
    return redirect()->route('home')->with('success', 'A foglalása sikeresen megtörtént!');
})->name('booking.store');