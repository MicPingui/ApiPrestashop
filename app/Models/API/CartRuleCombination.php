<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cart_rule_1
 * @property int $id_cart_rule_2
 */
class CartRuleCombination extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart_rule_combination';

    /**
     * @var array
     */
    protected $fillable = [];
}
