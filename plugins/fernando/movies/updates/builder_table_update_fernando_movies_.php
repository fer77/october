<?php namespace Fernando\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFernandoMovies extends Migration
{
    public function up()
    {
        Schema::table('fernando_movies_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('fernando_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
