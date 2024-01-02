<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Models\Galeri;

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



Route::get('/', [FrontController::class, 'index']);
Route::get('/hot_article', [FrontController::class, 'article'])->name('hot_article');
Route::get('/hot_article/read/{slug}', [FrontController::class, 'show_article'])->name('hot_article.read');

Auth::routes();
Route::middleware(['auth:web'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    // profile
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('profile.update');
});
Route::middleware(['auth:web', 'role:admin,seller'])->group(function () {
    //galeri
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::post('/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::put('/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
    //team
    Route::get('/team', [TeamController::class, 'index'])->name('team');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::put('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('/team/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    //article
    Route::get('/article', [ArticleController::class, 'index'])->name('article');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::put('/article/update/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/destroy/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    //services
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::put('/services/update/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/destroy/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
    //setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::put('/setting/update', [SettingController::class, 'update'])->name('setting.update');

    Route::get('/about', function () {
        return view('about');
    })->name('about');
});
