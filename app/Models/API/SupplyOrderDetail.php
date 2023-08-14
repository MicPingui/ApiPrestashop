<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supply_order_detail
 * @property int $id_supply_order
 * @property int $id_currency
 * @property int $id_product
 * @property int $id_product_attribute
 * @property string $reference
 * @property string $supplier_reference
 * @property string $name
 * @property string $ean13
 * @property string $isbn
 * @property string $upc
 * @property string $mpn
 * @property float $exchange_rate
 * @property float $unit_price_te
 * @property int $quantity_expected
 * @property int $quantity_received
 * @property float $price_te
 * @property float $discount_rate
 * @property float $discount_value_te
 * @property float $price_with_discount_te
 * @property float $tax_rate
 * @property float $tax_value
 * @property float $price_ti
 * @property float $tax_value_with_order_discount
 * @property float $price_with_order_discount_te
 */
class SupplyOrderDetail extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supply_order_detail';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_supply_order_detail';

    /**
     * @var array
     */
    protected $fillable = ['id_supply_order', 'id_currency', 'id_product', 'id_product_attribute', 'reference', 'supplier_reference', 'name', 'ean13', 'isbn', 'upc', 'mpn', 'exchange_rate', 'unit_price_te', 'quantity_expected', 'quantity_received', 'price_te', 'discount_rate', 'discount_value_te', 'price_with_discount_te', 'tax_rate', 'tax_value', 'price_ti', 'tax_value_with_order_discount', 'price_with_order_discount_te'];
}
