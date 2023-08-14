<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature
 * @property int $id_shop
 */
class FeatureShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_feature_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
