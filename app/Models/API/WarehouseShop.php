<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_shop
 * @property int $id_warehouse
 */
class WarehouseShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_warehouse_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
