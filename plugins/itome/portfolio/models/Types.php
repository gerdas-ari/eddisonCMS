<?php namespace Itome\Portfolio\Models;

use Model;

/**
 * Model
 */
class Types extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sluggable;
    use \Winter\Storm\Database\Traits\Sortable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'itome_portfolio_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $guarded = ['id'];

    protected $slugs = ['slug' => 'name'];

    public $hasMany = [
        'cards' => ['Itome\Portfolio\Models\Cards', 'key' => 'type_id']
    ];

    public $belongsTo = [
        'type' => ['Itome\Portfolio\Models\Types'],
        'year' => ['Itome\Portfolio\Models\Years'],

    ];
}
