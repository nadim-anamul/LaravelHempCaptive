<?php

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
    return view('home');
});
Route::get('/contact-us.html', function () {
    return view('contact-us');
});
Route::get('/coverages-offered.html', function () {
    return view('coverages-offered');
});
Route::get('/protect-your-green.html', function () {
    return view('protect-your-green');
});
Route::post('/contact-us/submit', 'MessagesControler@submit');
Route::post('/newsletter.html', 'MessagesControler@store');

