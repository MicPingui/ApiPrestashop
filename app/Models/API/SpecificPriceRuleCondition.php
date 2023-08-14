<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_specific_price_rule_condition
 * @property int $id_specific_price_rule_condition_group
 * @property string $type
 * @property string $value
 */
class SpecificPriceRuleCondition extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_specific_price_rule_condition';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_specific_price_rule_condition';

    /**
     * @var array
     */
    protected $fillable = ['id_specific_price_rule_condition_group', 'type', 'value'];
}
