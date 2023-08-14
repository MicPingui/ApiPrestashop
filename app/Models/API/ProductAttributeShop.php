<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_attribute
 * @property int $id_shop
 * @property int $id_product
 * @property float $wholesale_price
 * @property float $price
 * @property float $ecotax
 * @property float $weight
 * @property float $unit_price_impact
 * @property boolean $default_on
 * @property int $minimal_quantity
 * @property int $low_stock_threshold
 * @property boolean $low_stock_alert
 * @property string $available_date
 */
class ProductAttributeShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_attribute_shop';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'wholesale_price', 'price', 'ecotax', 'weight', 'unit_price_impact', 'default_on', 'minimal_quantity', 'low_stock_threshold', 'low_stock_alert', 'available_date'];
}
