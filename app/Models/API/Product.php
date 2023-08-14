<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_supplier
 * @property int $id_manufacturer
 * @property int $id_category_default
 * @property int $id_shop_default
 * @property int $id_tax_rules_group
 * @property boolean $on_sale
 * @property boolean $online_only
 * @property string $ean13
 * @property string $isbn
 * @property string $upc
 * @property string $mpn
 * @property float $ecotax
 * @property int $quantity
 * @property int $minimal_quantity
 * @property int $low_stock_threshold
 * @property boolean $low_stock_alert
 * @property float $price
 * @property float $wholesale_price
 * @property string $unity
 * @property float $unit_price_ratio
 * @property float $additional_shipping_cost
 * @property string $reference
 * @property string $supplier_reference
 * @property string $location
 * @property float $width
 * @property float $height
 * @property float $depth
 * @property float $weight
 * @property int $out_of_stock
 * @property boolean $additional_delivery_times
 * @property boolean $quantity_discount
 * @property boolean $customizable
 * @property boolean $uploadable_files
 * @property boolean $text_fields
 * @property boolean $active
 * @property string $redirect_type
 * @property int $id_type_redirected
 * @property boolean $available_for_order
 * @property string $available_date
 * @property boolean $show_condition
 * @property string $condition
 * @property boolean $show_price
 * @property boolean $indexed
 * @property string $visibility
 * @property boolean $cache_is_pack
 * @property boolean $cache_has_attachments
 * @property boolean $is_virtual
 * @property int $cache_default_attribute
 * @property string $date_add
 * @property string $date_upd
 * @property boolean $advanced_stock_management
 * @property int $pack_stock_type
 * @property int $state
 * @property string $product_type
 */
class Product extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product';

    /**
     * @var array
     */
    protected $fillable = ['id_supplier', 'id_manufacturer', 'id_category_default', 'id_shop_default', 'id_tax_rules_group', 'on_sale', 'online_only', 'ean13', 'isbn', 'upc', 'mpn', 'ecotax', 'quantity', 'minimal_quantity', 'low_stock_threshold', 'low_stock_alert', 'price', 'wholesale_price', 'unity', 'unit_price_ratio', 'additional_shipping_cost', 'reference', 'supplier_reference', 'location', 'width', 'height', 'depth', 'weight', 'out_of_stock', 'additional_delivery_times', 'quantity_discount', 'customizable', 'uploadable_files', 'text_fields', 'active', 'redirect_type', 'id_type_redirected', 'available_for_order', 'available_date', 'show_condition', 'condition', 'show_price', 'indexed', 'visibility', 'cache_is_pack', 'cache_has_attachments', 'is_virtual', 'cache_default_attribute', 'date_add', 'date_upd', 'advanced_stock_management', 'pack_stock_type', 'state', 'product_type'];
}
