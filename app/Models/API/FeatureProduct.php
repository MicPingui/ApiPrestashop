<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature
 * @property int $id_product
 * @property int $id_feature_value
 */
class FeatureProduct extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_feature_product';

    /**
     * @var array
     */
    protected $fillable = [];
}
