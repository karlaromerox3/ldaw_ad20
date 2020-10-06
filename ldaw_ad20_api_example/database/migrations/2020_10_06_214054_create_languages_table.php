<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            //El método ID crea un bigInt autoincremental con el índice PK automáticamente
            $table->id();
            $table->string("name");
            //Nullable define que la columna puede ser nula
            $table->string("description")->nullable();
            // Crear un campo "created_at" y otro "updated_at"
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
