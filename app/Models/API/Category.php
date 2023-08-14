<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_category
 * @property int $id_parent
 * @property int $id_shop_default
 * @property boolean $level_depth
 * @property int $nleft
 * @property int $nright
 * @property boolean $active
 * @property string $date_add
 * @property string $date_upd
 * @property int $position
 * @property boolean $is_root_category
 */
class Category extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_category';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_category';

    /**
     * @var array
     */
    protected $fillable = ['id_parent', 'id_shop_default', 'level_depth', 'nleft', 'nright', 'active', 'date_add', 'date_upd', 'position', 'is_root_category'];
}
