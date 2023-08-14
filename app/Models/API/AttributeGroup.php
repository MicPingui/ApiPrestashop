<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute_group
 * @property boolean $is_color_group
 * @property string $group_type
 * @property int $position
 */
class AttributeGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attribute_group';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_attribute_group';

    /**
     * @var array
     */
    protected $fillable = ['is_color_group', 'group_type', 'position'];
}
