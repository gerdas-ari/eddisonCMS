<?php namespace Itome\MainBlock\Models;

use Model;

/**
 * Model
 */
class Content extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable =
    [
        'title',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'itome_mainblock_content';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
