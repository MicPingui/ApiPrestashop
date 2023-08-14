<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id_smarty_cache
 * @property string $name
 * @property string $cache_id
 * @property string $modified
 * @property string $content
 */
class SmartyCache extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_smarty_cache';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_smarty_cache';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['name', 'cache_id', 'modified', 'content'];
}
