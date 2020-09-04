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

/*
Acciones HTTP: post, get, put, delete, patch, options
*/

/*
+ Catálogo de libros
+ Ver un libro
+ Préstamos
+ Mis préstamos
*/

/*
Atajo para devolver vistas estáticas
Asume que es GET
*/

Route::view('/',"welcome");

//Ruta más básica (catálogo de libros)
Route::get('/books', function(){

    $books = [
        "1" => [
            "title" => "El Principito",
            "author" => "Antoine de Saint-Exupéry"
        ],
        "2" => [
            "title" => "Los Miserables",
            "author" => "Víctor Hugo"
        ]
    ];

    //Se envía la información a la vista en un segundo parámetro
    return view('booksList', ["books" => $books]);

});

//Rutas que reciben parámetros (detalle de libro)
//El "?" indica que el parámetro puede ser opcional, en este caso se tiene que pasar
//un valor default al closure
Route::get('/book/{id?}', function($id = "1"){

    $books = [
        "1" => [
            "title" => "El Principito",
            "author" => "Antoine de Saint-Exupéry"
        ],
        "2" => [
            "title" => "Los Miserables",
            "author" => "Víctor Hugo"
        ]
    ];

    //La vista debe existir en resources/views
    return view("book", ["book" => $books[$id]]);
});

//Rutas con nombre

//Rutas que apuntan a controles

//Rutas que devuelven JSON

//Generación de rutas en las vistas
