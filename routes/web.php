<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('main.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/livewire', function () {
    //return view('dashboard');
   return redirect()->route('manage.index');
})->name('livewire');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::group(['prefix' => 'manage'], function () {
        Route::get('/', [\App\Http\Controllers\ManageController::class, 'index'])->name('manage.index');
        Route::get('/logout', [\App\Http\Controllers\ManageController::class, 'logout'])->name('logout');

    });

});
