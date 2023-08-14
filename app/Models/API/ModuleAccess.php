<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_profile
 * @property int $id_authorization_role
 */
class ModuleAccess extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_module_access';

    /**
     * @var array
     */
    protected $fillable = [];
}
