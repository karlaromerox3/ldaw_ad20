<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model{

    /**
     * Read books from JSON file.
     *
     * @return String
     */
    public static function readBooks(){
        //Cargar el archivo
        $filePath = storage_path("app/json/books.json");

        if($data = file_get_contents($filePath)){
            //Devolver los datos como un arreglo
            return json_decode($data, true);
        }

        return false;

    }

}
