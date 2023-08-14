<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_hook_module_exceptions
 * @property int $id_shop
 * @property int $id_module
 * @property int $id_hook
 * @property string $file_name
 */
class HookModuleExceptions extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_hook_module_exceptions';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_hook_module_exceptions';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'id_module', 'id_hook', 'file_name'];
}
