<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute
 * @property int $id_product
 * @property int $id_shop
 * @property int $id_attribute_group
 */
class LayeredProductAttribute extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_product_attribute';

    /**
     * @var array
     */
    protected $fillable = ['id_attribute_group'];
}
