<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_feature
 * @property int $position
 */
class Feature extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_feature';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_feature';

    /**
     * @var array
     */
    protected $fillable = ['position'];
}
