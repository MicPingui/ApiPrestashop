<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_specific_price
 * @property int $id_specific_price_rule
 * @property int $id_cart
 * @property int $id_product
 * @property int $id_shop
 * @property int $id_shop_group
 * @property int $id_currency
 * @property int $id_country
 * @property int $id_group
 * @property int $id_customer
 * @property int $id_product_attribute
 * @property float $price
 * @property int $from_quantity
 * @property float $reduction
 * @property boolean $reduction_tax
 * @property string $reduction_type
 * @property string $from
 * @property string $to
 */
class SpecificPrice extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_specific_price';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_specific_price';

    /**
     * @var array
     */
    protected $fillable = ['id_specific_price_rule', 'id_cart', 'id_product', 'id_shop', 'id_shop_group', 'id_currency', 'id_country', 'id_group', 'id_customer', 'id_product_attribute', 'price', 'from_quantity', 'reduction', 'reduction_tax', 'reduction_type', 'from', 'to'];
}
