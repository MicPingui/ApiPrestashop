<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_group
 * @property int $id_tag
 * @property int $id_lang
 * @property int $id_shop
 * @property int $counter
 */
class TagCount extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tag_count';

    /**
     * @var array
     */
    protected $fillable = ['id_lang', 'id_shop', 'counter'];
}
