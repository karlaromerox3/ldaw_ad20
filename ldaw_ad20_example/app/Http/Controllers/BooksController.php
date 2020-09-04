<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller{

    private $books = [
        "1" => [
            "title" => "El Principito",
            "author" => "Antoine de Saint-Exupéry"
        ],
        "2" => [
            "title" => "Los Miserables",
            "author" => "Víctor Hugo"
        ]
    ];

    //Catálogo de libros
    function index(){

        /*
        1.- El control le pide al modelo los libros BooksModel->getCatalog();
        2.- El modelo hace etición a la API -> JSON
        3.- El modelo genera una estructura de datos entendible por el control
        4.- El control procesa los datos devueltos por el modelo y los pasa a la vista
        5.- La vista renderiza los datos
        */

        //Se envía la información a la vista en un segundo parámetro
        return view('booksList', ["books" => $this->books]);
    }

    //Detalle de libro
    function show($id, $type="ebook"){
        //La vista debe existir en resources/views
        return view("book", ["book" => $this->books[$id], "type" => $type]);
    }

}
