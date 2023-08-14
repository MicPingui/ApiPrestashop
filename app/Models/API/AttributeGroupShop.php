<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute_group
 * @property int $id_shop
 */
class AttributeGroupShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attribute_group_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
