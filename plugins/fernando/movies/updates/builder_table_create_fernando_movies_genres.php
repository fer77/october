<?php namespace Fernando\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFernandoMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('fernando_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fernando_movies_genres');
    }
}
