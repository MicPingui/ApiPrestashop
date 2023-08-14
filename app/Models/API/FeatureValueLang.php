<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature_value
 * @property int $id_lang
 * @property string $value
 */
class FeatureValueLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_feature_value_lang';

    /**
     * @var array
     */
    protected $fillable = ['value'];
}
