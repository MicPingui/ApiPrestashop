<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_connections_source
 * @property int $id_referrer
 */
class ReferrerCache extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_referrer_cache';

    /**
     * @var array
     */
    protected $fillable = [];
}
