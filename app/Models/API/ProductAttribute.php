<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_attribute
 * @property int $id_product
 * @property string $reference
 * @property string $supplier_reference
 * @property string $location
 * @property string $ean13
 * @property string $isbn
 * @property string $upc
 * @property string $mpn
 * @property float $wholesale_price
 * @property float $price
 * @property float $ecotax
 * @property int $quantity
 * @property float $weight
 * @property float $unit_price_impact
 * @property boolean $default_on
 * @property int $minimal_quantity
 * @property int $low_stock_threshold
 * @property boolean $low_stock_alert
 * @property string $available_date
 */
class ProductAttribute extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_attribute';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product_attribute';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'reference', 'supplier_reference', 'location', 'ean13', 'isbn', 'upc', 'mpn', 'wholesale_price', 'price', 'ecotax', 'quantity', 'weight', 'unit_price_impact', 'default_on', 'minimal_quantity', 'low_stock_threshold', 'low_stock_alert', 'available_date'];
}
