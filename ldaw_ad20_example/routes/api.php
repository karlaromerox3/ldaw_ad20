<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/catalogo", function(){

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

    //return response()->json($books);

    return $books;

});
