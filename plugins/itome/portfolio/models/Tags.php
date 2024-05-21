<?php namespace Itome\Portfolio\Models;

use Model;

/**
 * Model
 */
class Tags extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'itome_portfolio_tags';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsToMany = [
        'cards' => [
            'Itome\Portfolio\Models\Cards',
            'key' => 'tag_id',
            'otherKey' => 'card_id',
            'table' => 'itome_portfolio_cards_tags'
        ]
    ];
}
