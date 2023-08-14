<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_hook_alias
 * @property string $alias
 * @property string $name
 */
class HookAlias extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_hook_alias';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_hook_alias';

    /**
     * @var array
     */
    protected $fillable = ['alias', 'name'];
}
