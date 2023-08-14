<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_tag
 * @property int $id_lang
 */
class ProductTag extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_tag';

    /**
     * @var array
     */
    protected $fillable = ['id_lang'];
}
