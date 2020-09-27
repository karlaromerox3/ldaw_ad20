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
        return response()->json($this->readBooks());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        echo "show: $id";
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
