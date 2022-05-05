<?php

use App\Http\Controllers\admin\CategoryNewsController as AdminCategoryNewsController;
use App\Http\Controllers\admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
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
});

Route::get('/about', function () {
    return 'This is my Laravel project. About page';
});

Route::get('/hello/{name}', function($name) {
    return 'Hello, ' . $name;
});

Route::get('/news', [NewsController::class, 'index'])
->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])
->where('id', '\d+')
->name('news.show');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('/categories', AdminCategoryNewsController::class);
    Route::resource('/news', AdminNewsController::class);
});

Route::get('/news/categories', [NewsController::class, 'categories'])
->name('categories');

Route::get('/news/categories/{id}', [NewsController::class, 'newsByCategory'])
->where('id', '\d+')
->name('categories.newsByCategory');