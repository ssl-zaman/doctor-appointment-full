<?php

use App\Http\Controllers\Admin\CompnaySettingController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\ProfileController;
use App\Models\Setting\CompanySetting;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('dashboard', function(){
    return Inertia::render('Test');
});


Route::get('home', function(){
    return view('home');
});



// admin routes start

Route::prefix('dashboard')->group(function(){
    Route::resource('medicine', controller: MedicineController::class);
    Route::delete('dose/{dose}', [ MedicineController::class, 'dose_destroy'])->name('dose.destroy');
    Route::resource('settings/company', CompnaySettingController::class);
    Route::post('abc/{company}', [CompnaySettingController::class, 'update'])->name('abtest');
    Route::resource('settings', SettingsController::class);

    Route::resource('slider', SliderController::class);
});
// admin routes end

Route::get('test', function(){
    dd(session()->all());
});


require __DIR__.'/auth.php';
