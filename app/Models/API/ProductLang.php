<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $id_shop
 * @property int $id_lang
 * @property string $description
 * @property string $description_short
 * @property string $link_rewrite
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $meta_title
 * @property string $name
 * @property string $available_now
 * @property string $available_later
 * @property string $delivery_in_stock
 * @property string $delivery_out_stock
 */
class ProductLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_lang';

    /**
     * @var array
     */
    protected $fillable = ['description', 'description_short', 'link_rewrite', 'meta_description', 'meta_keywords', 'meta_title', 'name', 'available_now', 'available_later', 'delivery_in_stock', 'delivery_out_stock'];
}
