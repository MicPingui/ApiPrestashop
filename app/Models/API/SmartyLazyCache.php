<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $template_hash
 * @property string $cache_id
 * @property string $compile_id
 * @property string $filepath
 * @property string $last_update
 */
class SmartyLazyCache extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_smarty_lazy_cache';

    /**
     * @var array
     */
    protected $fillable = ['filepath', 'last_update'];
}
