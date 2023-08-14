<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_carrier
 * @property int $id_warehouse
 */
class WarehouseCarrier extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_warehouse_carrier';

    /**
     * @var array
     */
    protected $fillable = [];
}
