<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('cursos', function (Blueprint $table) {
        $table->bigIncrements('id'); // Change to bigIncrements
        $table->unsignedBigInteger('user_id');
        $table->string('name', 50)->unique();
        $table->string('slug');
        $table->text('description');
        $table->float('price', 8, 2)->default(1);
        $table->foreign('user_id')->references('id')->on('users');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('cursos');
}
}
