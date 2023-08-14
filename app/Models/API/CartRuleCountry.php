<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cart_rule
 * @property int $id_country
 */
class CartRuleCountry extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart_rule_country';

    /**
     * @var array
     */
    protected $fillable = [];
}
