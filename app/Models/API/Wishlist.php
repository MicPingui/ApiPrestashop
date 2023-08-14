<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_wishlist
 * @property int $id_customer
 * @property int $id_shop
 * @property int $id_shop_group
 * @property string $token
 * @property string $name
 * @property int $counter
 * @property string $date_add
 * @property string $date_upd
 * @property int $default
 */
class Wishlist extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_wishlist';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_wishlist';

    /**
     * @var array
     */
    protected $fillable = ['id_customer', 'id_shop', 'id_shop_group', 'token', 'name', 'counter', 'date_add', 'date_upd', 'default'];
}
