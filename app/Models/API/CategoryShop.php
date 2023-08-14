<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_category
 * @property int $id_shop
 * @property int $position
 */
class CategoryShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_category_shop';

    /**
     * @var array
     */
    protected $fillable = ['position'];
}
