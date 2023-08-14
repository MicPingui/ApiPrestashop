<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute
 * @property int $id_product_attribute
 */
class ProductAttributeCombination extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_attribute_combination';

    /**
     * @var array
     */
    protected $fillable = [];
}
