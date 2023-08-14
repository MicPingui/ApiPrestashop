<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_rule
 * @property int $id_item
 */
class CartRuleProductRuleValue extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart_rule_product_rule_value';

    /**
     * @var array
     */
    protected $fillable = [];
}
