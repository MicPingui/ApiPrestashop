<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_delivery
 * @property int $id_shop
 * @property int $id_shop_group
 * @property int $id_carrier
 * @property int $id_range_price
 * @property int $id_range_weight
 * @property int $id_zone
 * @property float $price
 */
class Delivery extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_delivery';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_delivery';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'id_shop_group', 'id_carrier', 'id_range_price', 'id_range_weight', 'id_zone', 'price'];
}
