<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cart
 * @property int $id_product
 * @property int $id_address_delivery
 * @property int $id_product_attribute
 * @property int $id_customization
 * @property int $id_shop
 * @property int $quantity
 * @property string $date_add
 */
class CartProduct extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart_product';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'quantity', 'date_add'];
}
