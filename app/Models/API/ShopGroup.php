<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_shop_group
 * @property string $name
 * @property string $color
 * @property boolean $share_customer
 * @property boolean $share_order
 * @property boolean $share_stock
 * @property boolean $active
 * @property boolean $deleted
 */
class ShopGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_shop_group';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_shop_group';

    /**
     * @var array
     */
    protected $fillable = ['name', 'color', 'share_customer', 'share_order', 'share_stock', 'active', 'deleted'];
}
