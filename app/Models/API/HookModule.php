<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_module
 * @property int $id_shop
 * @property int $id_hook
 * @property boolean $position
 */
class HookModule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_hook_module';

    /**
     * @var array
     */
    protected $fillable = ['position'];
}
