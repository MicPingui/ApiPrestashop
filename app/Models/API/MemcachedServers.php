<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_memcached_server
 * @property string $ip
 * @property int $port
 * @property int $weight
 */
class MemcachedServers extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_memcached_servers';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_memcached_server';

    /**
     * @var array
     */
    protected $fillable = ['ip', 'port', 'weight'];
}
