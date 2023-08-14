<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_wishlist_product
 * @property int $id_wishlist
 * @property int $id_product
 * @property int $id_product_attribute
 * @property int $quantity
 * @property int $priority
 */
class WishlistProduct extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_wishlist_product';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_wishlist_product';

    /**
     * @var array
     */
    protected $fillable = ['id_wishlist', 'id_product', 'id_product_attribute', 'quantity', 'priority'];
}
