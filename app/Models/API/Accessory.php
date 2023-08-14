<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product_1
 * @property int $id_product_2
 */
class Accessory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_accessory';

    /**
     * @var array
     */
    protected $fillable = ['id_product_1', 'id_product_2'];
}
