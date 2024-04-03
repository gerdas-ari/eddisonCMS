<?php namespace Itome\Portfolio\Models;

use Model;

/**
 * Model
 */
class Cards extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sluggable;
    use \Winter\Storm\Database\Traits\Sortable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'itome_portfolio_cards';

    protected $slugs = ['slug' => 'name'];
    public $guarded = ['id'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];

    public $attachOne = [
        'main_image' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'type' => [
            'Itome\Portfolio\Models\Types',
            'key' => 'card_id',
            'otherKey' => 'type_id',
            'table' => 'itome_portfolio_cards_types'
        ],
    ];

    public $belongsTo = [
        'year' => ['Itome\Portfolio\Models\Years'],
    ];

    public function getPhotoSrcAttribute()
    {
        return $this->images->count() ? $this->images[0]->path : '/themes/itome/assets/img/no_photo.svg';
    }
}
