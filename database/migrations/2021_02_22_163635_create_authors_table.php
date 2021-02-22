<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('nickname');
            $table->string('email')->unique();
            $table->string('bio');
            //$table->integer('author_id');
            $table->timestamps();
        });

/*         Schema::table('books', function (Blueprint $table)
        {
            $table->foreign('author_id')
                ->references('id')->on('authors')
                ->onDelete('cascade');
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
