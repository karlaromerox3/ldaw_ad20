<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller{

    /**
     * Read books from JSON file.
     *
     * @return String
     */
    private function readBooks(){
        //Cargar el archivo
        $filePath = storage_path("app/json/books.json");

        if($data = file_get_contents($filePath)){
            //Devolver los datos como un arreglo
            return json_decode($data, true);
        }

        return false;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        echo "aquí va el formulario para crear libros";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
