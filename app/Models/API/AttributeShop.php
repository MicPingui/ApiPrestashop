<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_attribute
 * @property int $id_shop
 */
class AttributeShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_attribute_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
