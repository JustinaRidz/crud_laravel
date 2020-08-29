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


// Route::get('/1', function () {
//     return "<h1>Hello</h1>";
// });

// Route::get('/{text}', function ($text) {
//     return $text;
// });

//… apkeiskime vietomis ir darykime užklausą į localhost/1


// Route::get('/{text}', function($text) {
//     return $text;
// });


// Route::get('//', function() {
//     return '<div class="h1">Hello</div';
// });