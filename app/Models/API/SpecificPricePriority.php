<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_specific_price_priority
 * @property int $id_product
 * @property string $priority
 */
class SpecificPricePriority extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_specific_price_priority';

    /**
     * @var array
     */
    protected $fillable = ['priority'];
}
