<?php namespace Fernando\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFernandoMovies extends Migration
{
    public function up()
    {
        Schema::create('fernando_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('fernando_movies_');
    }
}
