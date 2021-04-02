<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCedulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedulas', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->nullable();
            $table->string('apellido')->nullable();
            $table->string('nombre')->nullable();
            $table->string('estadociv')->nullable();
            $table->string('fechanac')->nullable();
            $table->string('sexo')->nullable();
            $table->string('profesion')->nullable();
            $table->string('lugarnac')->nullable();
            $table->string('nacional')->nullable();
            $table->string('padre')->nullable();
            $table->string('madre')->nullable();
            $table->string('conyuge')->nullable();
            $table->string('domicilio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cedulas');
    }
}
