<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_manufacturer
 * @property int $id_lang
 * @property string $description
 * @property string $short_description
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 */
class ManufacturerLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_manufacturer_lang';

    /**
     * @var array
     */
    protected $fillable = ['description', 'short_description', 'meta_title', 'meta_keywords', 'meta_description'];
}
