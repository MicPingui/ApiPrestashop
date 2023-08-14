<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_stock_available
 * @property int $id_product
 * @property int $id_product_attribute
 * @property int $id_shop
 * @property int $id_shop_group
 * @property int $quantity
 * @property int $physical_quantity
 * @property int $reserved_quantity
 * @property boolean $depends_on_stock
 * @property boolean $out_of_stock
 * @property string $location
 */
class StockAvailable extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_stock_available';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_stock_available';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'id_product_attribute', 'id_shop', 'id_shop_group', 'quantity', 'physical_quantity', 'reserved_quantity', 'depends_on_stock', 'out_of_stock', 'location'];
}
