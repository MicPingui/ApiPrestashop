<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_supplier
 * @property int $id_product
 * @property int $id_product_attribute
 * @property int $id_supplier
 * @property string $product_supplier_reference
 * @property float $product_supplier_price_te
 * @property int $id_currency
 */
class ProductSupplier extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_supplier';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product_supplier';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'id_product_attribute', 'id_supplier', 'product_supplier_reference', 'product_supplier_price_te', 'id_currency'];
}
