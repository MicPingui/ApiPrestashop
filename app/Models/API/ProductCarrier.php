<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_carrier_reference
 * @property int $id_shop
 */
class ProductCarrier extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_carrier';

    /**
     * @var array
     */
    protected $fillable = [];
}
