<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_attachment
 */
class ProductAttachment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_attachment';

    /**
     * @var array
     */
    protected $fillable = [];
}
