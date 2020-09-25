<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller{

    //Carga de archivo
    private function readBooks(){
        //Cargar el archivo
        $filePath = storage_path("app/json/books.json");

        if($data = file_get_contents($filePath)){
            //Devolver los datos como un arreglo
            return json_decode($data, true);
        }

        return false;

    }

    //Catálogo de libros
    function index(){

        /*
        1.- El control le pide al modelo los libros BooksModel->getCatalog();
        2.- El modelo hace etición a la API -> JSON
        3.- El modelo genera una estructura de datos entendible por el control
        4.- El control procesa los datos devueltos por el modelo y los pasa a la vista
        5.- La vista renderiza los datos
        */

        //cargar el archivo
        $books = $this->readBooks();

        /*
        echo "<pre>";
        var_dump($books);
        echo "</pre>";

        die();
        */

        //Se envía la información a la vista en un segundo parámetro
        return view('booksList', ["books" => $books]);
    }

    //Detalle de libro
    function show($id, $type="ebook"){
        //La vista debe existir en resources/views
        return view("book", ["book" => $this->books[$id], "type" => $type]);
    }

}
