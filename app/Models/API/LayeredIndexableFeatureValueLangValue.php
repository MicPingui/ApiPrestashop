<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature_value
 * @property int $id_lang
 * @property string $url_name
 * @property string $meta_title
 */
class LayeredIndexableFeatureValueLangValue extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_indexable_feature_value_lang_value';

    /**
     * @var array
     */
    protected $fillable = ['url_name', 'meta_title'];
}
