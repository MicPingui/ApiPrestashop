<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_specific_price_rule
 * @property string $name
 * @property int $id_shop
 * @property int $id_currency
 * @property int $id_country
 * @property int $id_group
 * @property int $from_quantity
 * @property float $price
 * @property float $reduction
 * @property boolean $reduction_tax
 * @property string $reduction_type
 * @property string $from
 * @property string $to
 */
class SpecificPriceRule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_specific_price_rule';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_specific_price_rule';

    /**
     * @var array
     */
    protected $fillable = ['name', 'id_shop', 'id_currency', 'id_country', 'id_group', 'from_quantity', 'price', 'reduction', 'reduction_tax', 'reduction_type', 'from', 'to'];
}
