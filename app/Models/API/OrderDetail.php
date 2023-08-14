<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_detail
 * @property int $id_order
 * @property int $id_order_invoice
 * @property int $id_warehouse
 * @property int $id_shop
 * @property int $product_id
 * @property int $product_attribute_id
 * @property int $id_customization
 * @property string $product_name
 * @property int $product_quantity
 * @property int $product_quantity_in_stock
 * @property int $product_quantity_refunded
 * @property int $product_quantity_return
 * @property int $product_quantity_reinjected
 * @property float $product_price
 * @property float $reduction_percent
 * @property float $reduction_amount
 * @property float $reduction_amount_tax_incl
 * @property float $reduction_amount_tax_excl
 * @property float $group_reduction
 * @property float $product_quantity_discount
 * @property string $product_ean13
 * @property string $product_isbn
 * @property string $product_upc
 * @property string $product_mpn
 * @property string $product_reference
 * @property string $product_supplier_reference
 * @property float $product_weight
 * @property int $id_tax_rules_group
 * @property boolean $tax_computation_method
 * @property string $tax_name
 * @property float $tax_rate
 * @property float $ecotax
 * @property float $ecotax_tax_rate
 * @property boolean $discount_quantity_applied
 * @property string $download_hash
 * @property int $download_nb
 * @property string $download_deadline
 * @property float $total_price_tax_incl
 * @property float $total_price_tax_excl
 * @property float $unit_price_tax_incl
 * @property float $unit_price_tax_excl
 * @property float $total_shipping_price_tax_incl
 * @property float $total_shipping_price_tax_excl
 * @property float $purchase_supplier_price
 * @property float $original_product_price
 * @property float $original_wholesale_price
 * @property float $total_refunded_tax_excl
 * @property float $total_refunded_tax_incl
 */
class OrderDetail extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_detail';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_detail';

    /**
     * @var array
     */
    protected $fillable = ['id_order', 'id_order_invoice', 'id_warehouse', 'id_shop', 'product_id', 'product_attribute_id', 'id_customization', 'product_name', 'product_quantity', 'product_quantity_in_stock', 'product_quantity_refunded', 'product_quantity_return', 'product_quantity_reinjected', 'product_price', 'reduction_percent', 'reduction_amount', 'reduction_amount_tax_incl', 'reduction_amount_tax_excl', 'group_reduction', 'product_quantity_discount', 'product_ean13', 'product_isbn', 'product_upc', 'product_mpn', 'product_reference', 'product_supplier_reference', 'product_weight', 'id_tax_rules_group', 'tax_computation_method', 'tax_name', 'tax_rate', 'ecotax', 'ecotax_tax_rate', 'discount_quantity_applied', 'download_hash', 'download_nb', 'download_deadline', 'total_price_tax_incl', 'total_price_tax_excl', 'unit_price_tax_incl', 'unit_price_tax_excl', 'total_shipping_price_tax_incl', 'total_shipping_price_tax_excl', 'purchase_supplier_price', 'original_product_price', 'original_wholesale_price', 'total_refunded_tax_excl', 'total_refunded_tax_incl'];
}
