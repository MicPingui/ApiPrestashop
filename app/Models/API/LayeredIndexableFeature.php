<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature
 * @property boolean $indexable
 */
class LayeredIndexableFeature extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_layered_indexable_feature';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_feature';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['indexable'];
}
