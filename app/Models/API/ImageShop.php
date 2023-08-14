<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_image
 * @property int $id_shop
 * @property int $id_product
 * @property boolean $cover
 */
class ImageShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_image_shop';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'cover'];
}
