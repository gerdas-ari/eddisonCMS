<?php namespace Itome\Portfolio\Models;

use Model;

/**
 * Model
 */
class Years extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;
    //use \Winter\Storm\Database\Traits\Sluggable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'itome_portfolio_years';

    // protected $slugs = ['slug' => 'name'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'cards' => ['Itome\Portfolio\Models\Cards']
    ];
}
