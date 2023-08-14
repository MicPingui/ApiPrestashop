<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_manufacturer
 * @property int $id_shop
 */
class ManufacturerShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_manufacturer_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
