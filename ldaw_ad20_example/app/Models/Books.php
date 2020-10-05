<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
//use Illuminate\Database\Eloquent\Model;

//class Books extends Model{
class Books{

    //Consulta a la API y devuelve un listado de libros en formato JSON
    public static function getBooks(){

        //cargar el archivo
        $response = Http::get(env("API_URL") . 'books');
        //Devolver la respuesta en un arreglo
        return $response->json();

    }

}
