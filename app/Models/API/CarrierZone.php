<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_carrier
 * @property int $id_zone
 */
class CarrierZone extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_carrier_zone';

    /**
     * @var array
     */
    protected $fillable = [];
}
