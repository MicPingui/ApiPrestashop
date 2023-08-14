<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_image
 * @property int $id_product
 * @property integer $position
 * @property boolean $cover
 */
class Image extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_image';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_image';

    /**
     * @var array
     */
    protected $fillable = ['id_product', 'position', 'cover'];
}
