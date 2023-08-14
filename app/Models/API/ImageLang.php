<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_image
 * @property int $id_lang
 * @property string $legend
 */
class ImageLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_image_lang';

    /**
     * @var array
     */
    protected $fillable = ['legend'];
}
