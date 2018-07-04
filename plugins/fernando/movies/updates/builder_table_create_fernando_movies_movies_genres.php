<?php namespace Fernando\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFernandoMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('fernando_movies_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fernando_movies_movies_genres');
    }
}
