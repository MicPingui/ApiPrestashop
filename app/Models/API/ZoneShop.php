<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_zone
 * @property int $id_shop
 */
class ZoneShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_zone_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
