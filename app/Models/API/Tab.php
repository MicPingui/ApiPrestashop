<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_tab
 * @property int $id_parent
 * @property int $position
 * @property string $module
 * @property string $class_name
 * @property string $route_name
 * @property boolean $active
 * @property boolean $enabled
 * @property boolean $hide_host_mode
 * @property string $icon
 * @property string $wording
 * @property string $wording_domain
 */
class Tab extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_tab';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_tab';

    /**
     * @var array
     */
    protected $fillable = ['id_parent', 'position', 'module', 'class_name', 'route_name', 'active', 'enabled', 'hide_host_mode', 'icon', 'wording', 'wording_domain'];
}
