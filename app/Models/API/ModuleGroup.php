<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_module
 * @property int $id_shop
 * @property int $id_group
 */
class ModuleGroup extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_module_group';

    /**
     * @var array
     */
    protected $fillable = [];
}
