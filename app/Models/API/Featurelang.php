<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature
 * @property int $id_lang
 * @property string $name
 */
class Featurelang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_feature_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
