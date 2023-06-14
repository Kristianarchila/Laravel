<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('clases', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('titulo', 50);
        $table->string('descripcion', 50);
        $table->unsignedBigInteger('curso_id')->unsigned(); // Change to unsignedBigInteger
        $table->boolean('free')->default(true);
        $table->timestamps();
    
        $table->foreign('curso_id')->references('id')->on('cursos');
    });
}

public function down()
{
    Schema::dropIfExists('clases');
}
}