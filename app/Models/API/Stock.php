<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_stock
 * @property int $id_warehouse
 * @property int $id_product
 * @property int $id_product_attribute
 * @property string $reference
 * @property string $ean13
 * @property string $isbn
 * @property string $upc
 * @property string $mpn
 * @property int $physical_quantity
 * @property int $usable_quantity
 * @property float $price_te
 */
class Stock extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_stock';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_stock';

    /**
     * @var array
     */
    protected $fillable = ['id_warehouse', 'id_product', 'id_product_attribute', 'reference', 'ean13', 'isbn', 'upc', 'mpn', 'physical_quantity', 'usable_quantity', 'price_te'];
}
