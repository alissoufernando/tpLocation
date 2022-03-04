<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\Page404Controller;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserMenuController;
use App\Http\Controllers\UserVoitureController;
use App\Http\Controllers\UserLocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','can:manage-users'])->name('dashboard');

Route::resource('user/Ulocation', UserLocationController::class)->except('update');
Route::patch('user/Ulocation/{{Ulocation}}', [UserLocationController::class, 'updateRendre'])->name('Ulocation.updateRendre');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
})->name("welcome");



Route::prefix('admin')->middleware(['auth','can:manage-users'])->group(function(){
    Route::resource('role', RoleController::class);
    Route::resource('voiture', VoitureController::class);
    Route::resource('location', LocationController::class);
    Route::resource('user', UserController::class)->only('index', 'update', 'destroy', 'edit', 'show');
    Route::resource('table', TableController::class)->only('index');

    Route::patch('location/{location}', [LocationController::class, 'updateAutoriser'])->name('location.updateAutoriser');
    Route::patch('locationrendre/{location}', [LocationController::class, 'updateRendre'])->name('location.updateRendre');
});


Route::prefix('user')->group(function(){

    Route::resource('Uvoiture', UserVoitureController::class);
    Route::get('about', [UserMenuController::class, 'about'])->name('userMenu.about');
    Route::get('contact', [UserMenuController::class, 'contact'])->name('userMenu.contact');
});


Route::resource('pageserror404', Page404Controller::class)->only('index');


