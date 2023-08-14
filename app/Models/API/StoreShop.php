<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_store
 * @property int $id_shop
 */
class StoreShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_store_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
