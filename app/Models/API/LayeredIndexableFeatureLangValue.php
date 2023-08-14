<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature
 * @property int $id_lang
 * @property string $url_name
 * @property string $meta_title
 */
class LayeredIndexableFeatureLangValue extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_indexable_feature_lang_value';

    /**
     * @var array
     */
    protected $fillable = ['url_name', 'meta_title'];
}
