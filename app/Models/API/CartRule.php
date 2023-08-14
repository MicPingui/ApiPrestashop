<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cart_rule
 * @property int $id_customer
 * @property string $date_from
 * @property string $date_to
 * @property string $description
 * @property int $quantity
 * @property int $quantity_per_user
 * @property int $priority
 * @property boolean $partial_use
 * @property string $code
 * @property float $minimum_amount
 * @property boolean $minimum_amount_tax
 * @property int $minimum_amount_currency
 * @property boolean $minimum_amount_shipping
 * @property boolean $country_restriction
 * @property boolean $carrier_restriction
 * @property boolean $group_restriction
 * @property boolean $cart_rule_restriction
 * @property boolean $product_restriction
 * @property boolean $shop_restriction
 * @property boolean $free_shipping
 * @property float $reduction_percent
 * @property float $reduction_amount
 * @property boolean $reduction_tax
 * @property int $reduction_currency
 * @property int $reduction_product
 * @property boolean $reduction_exclude_special
 * @property int $gift_product
 * @property int $gift_product_attribute
 * @property boolean $highlight
 * @property boolean $active
 * @property string $date_add
 * @property string $date_upd
 */
class CartRule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart_rule';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_cart_rule';

    /**
     * @var array
     */
    protected $fillable = ['id_customer', 'date_from', 'date_to', 'description', 'quantity', 'quantity_per_user', 'priority', 'partial_use', 'code', 'minimum_amount', 'minimum_amount_tax', 'minimum_amount_currency', 'minimum_amount_shipping', 'country_restriction', 'carrier_restriction', 'group_restriction', 'cart_rule_restriction', 'product_restriction', 'shop_restriction', 'free_shipping', 'reduction_percent', 'reduction_amount', 'reduction_tax', 'reduction_currency', 'reduction_product', 'reduction_exclude_special', 'gift_product', 'gift_product_attribute', 'highlight', 'active', 'date_add', 'date_upd'];
}
