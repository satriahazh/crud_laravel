<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.',
    ];
    return view('about', $data);
});

Route::group(['middleware' => 'admin'], function () {
    Route::resource('/product', ProductController::class)->middleware('admin');
    Route::get('/admin-dashboard', 'AdminController@index');
});
