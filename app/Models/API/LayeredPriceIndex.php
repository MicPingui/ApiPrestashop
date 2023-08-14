<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_currency
 * @property int $id_shop
 * @property int $id_country
 * @property float $price_min
 * @property float $price_max
 */
class LayeredPriceIndex extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_price_index';

    /**
     * @var array
     */
    protected $fillable = ['price_min', 'price_max'];
}
