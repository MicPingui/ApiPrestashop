<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_layered_filter
 * @property int $id_shop
 */
class LayeredFilterShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_filter_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
