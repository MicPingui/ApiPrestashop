<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_country
 * @property int $id_tax
 */
class ProductCountryTax extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_country_tax';

    /**
     * @var array
     */
    protected $fillable = ['id_tax'];
}
