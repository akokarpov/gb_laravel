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
});

Route::get('/about', function () {
    return 'This is my Laravel project. About page';
});

Route::get('/hello/{name}', function($name) {
    return 'Hello, ' . $name;
});

Route::get('/news/{id}', function($id) {
    switch ($id) {
        case 1:
            $news = 'news 1';
            break;
        
        case 2:
            $news = 'news 2';
            break;
        
        case 3:
            $news = 'news 3';
            break;
        
        default:
            $news = 'other ids';
            break;
    }

    return $news . ' from mysite.loc/news/' . $id;
});

