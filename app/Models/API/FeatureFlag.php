<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature_flag
 * @property string $name
 * @property boolean $state
 * @property string $label_wording
 * @property string $label_domain
 * @property string $description_wording
 * @property string $description_domain
 */
class FeatureFlag extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_feature_flag';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_feature_flag';

    /**
     * @var array
     */
    protected $fillable = ['name', 'state', 'label_wording', 'label_domain', 'description_wording', 'description_domain'];
}
