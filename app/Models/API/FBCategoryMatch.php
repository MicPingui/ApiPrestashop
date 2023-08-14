<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_category
 * @property int $id_shop
 * @property int $google_category_id
 * @property string $google_category_name
 * @property int $google_category_parent_id
 * @property string $google_category_parent_name
 * @property boolean $is_parent_category
 */
class FBCategoryMatch extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_fb_category_match';

    /**
     * @var array
     */
    protected $fillable = ['google_category_id', 'google_category_name', 'google_category_parent_id', 'google_category_parent_name', 'is_parent_category'];
}
