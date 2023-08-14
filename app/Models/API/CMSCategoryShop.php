<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cms_category
 * @property int $id_shop
 */
class CMSCategoryShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cms_category_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
