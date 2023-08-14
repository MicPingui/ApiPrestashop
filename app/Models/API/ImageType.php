<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_image_type
 * @property string $name
 * @property int $width
 * @property int $height
 * @property boolean $products
 * @property boolean $categories
 * @property boolean $manufacturers
 * @property boolean $suppliers
 * @property boolean $stores
 */
class ImageType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_image_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_image_type';

    /**
     * @var array
     */
    protected $fillable = ['name', 'width', 'height', 'products', 'categories', 'manufacturers', 'suppliers', 'stores'];
}
