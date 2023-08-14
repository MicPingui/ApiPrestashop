<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_layered_category
 * @property int $id_shop
 * @property string $controller
 * @property int $id_category
 * @property int $id_value
 * @property string $type
 * @property int $position
 * @property int $filter_type
 * @property int $filter_show_limit
 */
class LayeredCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_category';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_layered_category';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'controller', 'id_category', 'id_value', 'type', 'position', 'filter_type', 'filter_show_limit'];
}
