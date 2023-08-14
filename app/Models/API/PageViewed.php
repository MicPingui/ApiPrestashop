<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_page
 * @property int $id_shop
 * @property int $id_date_range
 * @property int $id_shop_group
 * @property int $counter
 */
class PageViewed extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_page_viewed';

    /**
     * @var array
     */
    protected $fillable = ['id_shop_group', 'counter'];
}
