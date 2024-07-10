<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PerhitunganWPController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\SubKriteriaController;  
use App\Http\Controllers\HitungWPController;
use App\Http\Controllers\HitungAlternatifController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/auth/redirect',[SocialiteController::class, 'redirect']);
Route::get('/auth/callback', [SocialiteController::class, 'callback']);
    

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(AlternatifController::class)->prefix('alternatifs')->group(function () {
        Route::get('', 'index')->name('alternatif');
        Route::get('create', 'create')->name('alternatif.create');
        Route::post('store', 'store')->name('alternatif.store');
        Route::resource('alternatif', AlternatifController::class);
    });

    Route::controller(KriteriaController::class)->prefix('kriterias')->group(function () {
        Route::get('', 'index')->name('kriteria');
        Route::get('create', 'create')->name('kriteria.create');
        Route::post('store', 'store')->name('kriteria.store');
        Route::resource('kriteria', KriteriaController::class);
        Route::get('kriteria/create', [KriteriaController::class, 'create'])->name('kriteria.create');
        Route::delete('kriteria/{kriteria}', [KriteriaController::class, 'destroy'])->name('kriteria.destroy');
        Route::get('/kriteria', 'KriteriaController@index')->name('kriteria.index');

    }); 

    Route::controller(SubKriteriaController::class)->prefix('subkriteria')->group(function () {
        Route::get('', 'index')->name('subkriteria');
        Route::get('create', 'create')->name('subkriteria.create');
        Route::post('store', 'store')->name('subkriteria.store');
        Route::resource('subkriteria', SubKriteriaController::class);
        Route::get('subkriteria/create', [SubKriteriaController::class, 'create'])->name('subkriteria.create');
        Route::delete('subkriteria/{subkriteria}', [SubKriteriaController::class, 'destroy'])->name('subkriteria.destroy');
    });  

    Route::controller(HitungAlternatifController::class)->prefix('hitung-alternatif')->group(function () {
        Route::get('', 'index')->name('hitung_alternatif.index');
        Route::get('create', 'create')->name('hitung_alternatif.create');
        Route::post('store', 'store')->name('hitung_alternatif.store');
        Route::resource('hitung_alternatif', HitungAlternatifController::class);
        Route::get('hitung_alternatif/create', [HitungAlternatifController::class, 'create'])->name('hitung_alternatif.create');
        Route::delete('hitung_alternatif/{hitung_alternatif}', [HitungAlternatifController::class, 'destroy'])->name('hitung_alternatif.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

// Route::get('/auth/google', [SocialController:: class, 'redirect'])->name ('auth.google');
// Route::get('/auth/google/callback', [SocialController:: class, 'callback'])->name ('auth.google.callback');



});