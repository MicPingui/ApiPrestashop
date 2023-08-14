<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_group
 * @property float $reduction
 */
class ProductGroupReductionCache extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_group_reduction_cache';

    /**
     * @var array
     */
    protected $fillable = ['reduction'];
}
