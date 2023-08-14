<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_carrier
 * @property int $id_shop
 */
class CarrierShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_carrier_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
