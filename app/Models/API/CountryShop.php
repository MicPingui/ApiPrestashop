<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_country
 * @property int $id_shop
 */
class CountryShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_country_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
