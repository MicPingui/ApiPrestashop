<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_warehouse_product_location
 * @property int $id_product
 * @property int $id_product_attribute
 * @property int $id_warehouse
 * @property string $location
 */
class WarehouseProductLocation extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_warehouse_product_location';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_warehouse_product_location';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'id_product_attribute', 'id_warehouse', 'location'];
}
