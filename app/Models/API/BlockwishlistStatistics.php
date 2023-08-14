<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_statistics
 * @property int $id_cart
 * @property int $id_product
 * @property int $id_product_attribute
 * @property string $date_add
 * @property int $id_shop
 */
class BlockwishlistStatistics extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_blockwishlist_statistics';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_statistics';

    /**
     * @var array
     */
    protected $fillable = ['id_cart', 'id_product', 'id_product_attribute', 'date_add', 'id_shop'];
}
