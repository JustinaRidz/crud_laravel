<?php

use Illuminate\Support\Facades\DB;
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




// Route::get('/posts', [
//     'uses' => 'BlogPostController@index',  //koks kontroleris naudojamas
//     'as' => 'posts.index' //route'o vardas
// ]);
Route::get('/posts', 'BlogPostController@index')->name('posts.index');

Route::get('/posts/{id}', 'BlogPostController@show');

Route::get('/about-page', function () {
    return "<h1>About</h1>";
    // return view('about');
})->name('about');

Route::get('/', function () {
    return view('welcome');
})->name('index');


// class Person{
//     public $age;
//     public $name;
//     public function __construct($age, $name){
//         $this->age = $age;
//         $this->name = $name;
//     }
// }


// Route::get('/', function () {
//     $people = [
//         new Person(22, "Jonas"), 
//         new Person(16, "Petras")
//     ];
//     return view('welcome', compact('people'));
// });



// // http://localhost/1
// // http://localhost/abc
// // Pavyzdys atsako į klausimą: kaip padaryti, kad šitas route’as handlintų tik requestus, kur URL yra skaičiai
// Route::get('/{id}', function ($id) {
//     return $id;
// })->name('regular.root')->where('id', '[0-9]+');



// Route::get('/', function () {
//     $person = new Person(22, "Jonas");
//     // return view('welcome', compact('person'));

//     // arba jau matytu būdu:
//     return view('welcome', ["person" => $person]);
// });


// Route::get('/{name}', function ($name) {
//     return view('welcome', ["var" => $name]);
// });

// Route::get('/', function () {
//     return view('welcome', ["var" => 1, "letters" => ["A", "B", "C"]]);
// });

// Route::get('/', function () {
//     return "<h1>Hello</h1>";
// });


// class Person {
//     public $age = 0;
//     public function __construct($age){
//         $this->age = $age;
//     }
// }

// Route::get('/1', function () {
//     return Response::json(new Person(5));
// });



// Route::get('/', function () {
//     return view('welcome');
// })->name('index');

// Route::get('/home', function () {
//     return redirect()->route('index'); // redirect to named route
//     // return redirect('/admin/1'); //  redirect to route
//     // return "<h1>Hello</h1>";
// });


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