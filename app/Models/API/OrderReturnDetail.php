<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_return
 * @property int $id_order_detail
 * @property int $id_customization
 * @property int $product_quantity
 */
class OrderReturnDetail extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_return_detail';

    /**
     * @var array
     */
    protected $fillable = ['product_quantity'];
}
