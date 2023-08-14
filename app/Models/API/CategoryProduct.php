<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_category
 * @property int $id_product
 * @property int $position
 */
class CategoryProduct extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_category_product';

    /**
     * @var array
     */
    protected $fillable = ['position'];
}
