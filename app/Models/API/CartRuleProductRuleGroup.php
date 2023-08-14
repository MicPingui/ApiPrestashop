<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_rule_group
 * @property int $id_cart_rule
 * @property int $quantity
 */
class CartRuleProductRuleGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart_rule_product_rule_group';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product_rule_group';

    /**
     * @var array
     */
    protected $fillable = ['id_cart_rule', 'quantity'];
}
