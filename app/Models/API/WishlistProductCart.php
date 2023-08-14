<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_wishlist_product
 * @property int $id_cart
 * @property int $quantity
 * @property string $date_add
 */
class WishlistProductCart extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_wishlist_product_cart';

    /**
     * @var array
     */
    protected $fillable = ['id_wishlist_product', 'id_cart', 'quantity', 'date_add'];
}
