<?php

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

Route::get('/about', function(){
    return '<h1>About page</h1>';
});

// Route::get('/contact', function(){
//     return view('contact');
// });

/**
 * Если нужно на странице исользовать get и post
 * то есть встроенный методод match
 * ->name() - позволяет делать именованные маршруты в шаблоне указываем {{ route('name') }}
 */
 Route::match(['post', 'get'], '/contact', function(){
    return view('contact');
 })->name('contact');

/**
 * Если нужно открыть только шаблон
 * можно использовать короткую запись view()
 */
Route::view('/test', 'test', ['test' => 'test data']);