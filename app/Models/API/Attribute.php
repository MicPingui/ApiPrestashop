<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute
 * @property int $id_attribute_group
 * @property string $color
 * @property int $position
 */
class Attribute extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attribute';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_attribute';

    /**
     * @var array
     */
    protected $fillable = ['id_attribute_group', 'color', 'position'];
}
