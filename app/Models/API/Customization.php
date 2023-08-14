<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customization
 * @property int $id_address_delivery
 * @property int $id_cart
 * @property int $id_product
 * @property int $id_product_attribute
 * @property int $quantity
 * @property int $quantity_refunded
 * @property int $quantity_returned
 * @property boolean $in_cart
 */
class Customization extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customization';

    /**
     * @var array
     */
    protected $fillable = ['id_product_attribute', 'quantity', 'quantity_refunded', 'quantity_returned', 'in_cart'];
}
