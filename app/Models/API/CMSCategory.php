<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cms_category
 * @property int $id_parent
 * @property boolean $level_depth
 * @property boolean $active
 * @property string $date_add
 * @property string $date_upd
 * @property int $position
 */
class CMSCategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cms_category';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_cms_category';

    /**
     * @var array
     */
    protected $fillable = ['id_parent', 'level_depth', 'active', 'date_add', 'date_upd', 'position'];
}
