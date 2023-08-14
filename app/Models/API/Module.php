<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_module
 * @property string $name
 * @property boolean $active
 * @property string $version
 */
class Module extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_module';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_module';

    /**
     * @var array
     */
    protected $fillable = ['name', 'active', 'version'];
}
