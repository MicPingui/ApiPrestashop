<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_pack
 * @property int $id_product_item
 * @property int $id_product_attribute_item
 * @property int $quantity
 */
class Pack extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_pack';

    /**
     * @var array
     */
    protected $fillable = ['quantity'];
}
