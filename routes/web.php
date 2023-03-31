<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [PageController::class, 'home']);

Route::prefix('product')->group(function () {
    Route::get('/', [PageController::class, "productHome"]);
    Route::get('{id}', [PageController::class, "product"]);
});

Route::get('/news', [PageController::class, "newsHome"]);
Route::get('/news/{id}', [PageController::class, "news"]);

Route::prefix('program')->group(function () {
    Route::get('/', [PageController::class, "program"]);
    Route::get('/karir', function () {
        return redirect("https://www.educastudio.com/program/karir");
    });
    Route::get('/magang', function () {
        return redirect("https: //www.educastudio.com/program/magang");
    });
    Route::get('/kunjungan', function () {
        return redirect("https://www.educastudio.com/program/kunjungan-industri");
    });
});

Route::get('/contact', [PageController::class, 'contact_us']);

Route::get('/about', [PageController::class, 'about_us']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
