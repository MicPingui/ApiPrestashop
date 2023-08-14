<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_currency
 * @property int $id_shop
 * @property float $conversion_rate
 */
class CurrencyShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_currency_shop';

    /**
     * @var array
     */
    protected $fillable = ['conversion_rate'];
}
