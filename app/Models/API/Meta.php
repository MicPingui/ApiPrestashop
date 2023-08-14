<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_meta
 * @property string $page
 * @property boolean $configurable
 */
class Meta extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_meta';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_meta';

    /**
     * @var array
     */
    protected $fillable = ['page', 'configurable'];
}
