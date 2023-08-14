<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_specific_price_rule_condition_group
 * @property int $id_specific_price_rule
 */
class SpecificPriceRuleConditionGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_specific_price_rule_condition_group';

    /**
     * @var array
     */
    protected $fillable = [];
}
