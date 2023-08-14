<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_shop
 * @property int $id_category_default
 * @property int $id_tax_rules_group
 * @property boolean $on_sale
 * @property boolean $online_only
 * @property float $ecotax
 * @property int $minimal_quantity
 * @property int $low_stock_threshold
 * @property boolean $low_stock_alert
 * @property float $price
 * @property float $wholesale_price
 * @property string $unity
 * @property float $unit_price_ratio
 * @property float $additional_shipping_cost
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
 * @property int $cache_default_attribute
 * @property boolean $advanced_stock_management
 * @property string $date_add
 * @property string $date_upd
 * @property int $pack_stock_type
 */
class ProductShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_shop';

    /**
     * @var array
     */
    protected $fillable = ['id_category_default', 'id_tax_rules_group', 'on_sale', 'online_only', 'ecotax', 'minimal_quantity', 'low_stock_threshold', 'low_stock_alert', 'price', 'wholesale_price', 'unity', 'unit_price_ratio', 'additional_shipping_cost', 'customizable', 'uploadable_files', 'text_fields', 'active', 'redirect_type', 'id_type_redirected', 'available_for_order', 'available_date', 'show_condition', 'condition', 'show_price', 'indexed', 'visibility', 'cache_default_attribute', 'advanced_stock_management', 'date_add', 'date_upd', 'pack_stock_type'];
}
