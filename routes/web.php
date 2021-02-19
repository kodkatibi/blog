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

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('main.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/livewire', function () {
    //return view('dashboard');
    return redirect()->route('manage.index');
})->name('livewire');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::group(['prefix' => 'manage'], function () {
        Route::get('/', [\App\Http\Controllers\ManageController::class, 'index'])
            ->name('manage.index');
        Route::get('/logout', [\App\Http\Controllers\ManageController::class, 'logout'])
            ->name('logout');

        Route::group(['prefix' => 'article'], function () {
            Route::get('/', [\App\Http\Controllers\ArticleController::class, 'index'])
                ->name('manage.article.index');
            Route::get('/myarticles', [\App\Http\Controllers\ArticleController::class, 'index'])
                ->name('manage.myarticles');
            Route::get('/detail/{slug}', [\App\Http\Controllers\ArticleController::class, 'detail'])
                ->name('manage.article.detail');
            Route::get('add', [\App\Http\Controllers\ArticleController::class, 'create'])
                ->name('manage.article.add');
            Route::post('add', [\App\Http\Controllers\ArticleController::class, 'store'])
                ->name('manage.article.add');

            Route::get('edit/{slug}', [\App\Http\Controllers\ArticleController::class, 'edit'])
                ->name('manage.article.edit');
            Route::post('edit/{slug}', [\App\Http\Controllers\ArticleController::class, 'update'])
                ->name('manage.article.edit');

            Route::get('delete/{slug}', [\App\Http\Controllers\ArticleController::class, 'destroy'])
                ->name('manage.article.delete');

            Route::get('changeStatus/{slug}/{type?}', [\App\Http\Controllers\ArticleController::class, 'changeStatus'])
                ->name('manage.article.status')->middleware('moderator');
            Route::post('rate/{slug}', [\App\Http\Controllers\RateController::class, 'store'])
                ->name('manage.article.rate');
        });

    });

});
