<?php namespace Fernando\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fernando_movies_';

    protected $jsonable = ['actors'];

    /**
     * Relations
     */

     public $belongsToMany = [
         'genres' => [
             'Fernando\Movies\Models\Genre',
             'table' => 'fernando_movies_movies_genres',
             'order' => 'genre_title'
         ]
    ];

     public $attachOne = [
         'poster' => 'System\Models\File'
     ];
     
     public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];
}
