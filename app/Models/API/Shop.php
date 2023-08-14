<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_shop
 * @property int $id_shop_group
 * @property string $name
 * @property string $color
 * @property int $id_category
 * @property string $theme_name
 * @property boolean $active
 * @property boolean $deleted
 */
class Shop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_shop';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_shop';

    /**
     * @var array
     */
    protected $fillable = ['id_shop_group', 'name', 'color', 'id_category', 'theme_name', 'active', 'deleted'];
}
