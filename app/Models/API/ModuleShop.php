<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_module
 * @property int $id_shop
 * @property boolean $enable_device
 */
class ModuleShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_module_shop';

    /**
     * @var array
     */
    protected $fillable = ['enable_device'];
}
