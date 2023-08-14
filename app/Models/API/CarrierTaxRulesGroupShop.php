<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_carrier
 * @property int $id_tax_rules_group
 * @property int $id_shop
 */
class CarrierTaxRulesGroupShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_carrier_tax_rules_group_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
