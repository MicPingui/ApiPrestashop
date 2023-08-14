<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature_value
 * @property int $id_feature
 * @property boolean $custom
 */
class FeatureValue extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_feature_value';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_feature_value';

    /**
     * @var array
     */
    protected $fillable = ['id_feature', 'custom'];
}
