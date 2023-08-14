<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cart
 * @property int $id_cart_rule
 */
class CartCartRule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart_cart_rule';

    /**
     * @var array
     */
    protected $fillable = [];
}
