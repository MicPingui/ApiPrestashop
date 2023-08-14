<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute_impact
 * @property int $id_product
 * @property int $id_attribute
 * @property float $weight
 * @property float $price
 */
class AttributeImpact extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attribute_impact';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_attribute_impact';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'id_attribute', 'weight', 'price'];
}
