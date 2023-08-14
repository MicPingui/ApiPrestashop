<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_rule
 * @property int $id_product_rule_group
 * @property string $type
 */
class CartRuleProductRule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart_rule_product_rule';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product_rule';

    /**
     * @var array
     */
    protected $fillable = ['id_product_rule_group', 'type'];
}
