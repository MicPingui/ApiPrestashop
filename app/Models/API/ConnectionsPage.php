<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_connections
 * @property int $id_page
 * @property string $time_start
 * @property string $time_end
 */
class ConnectionsPage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_connections_page';

    /**
     * @var array
     */
    protected $fillable = ['time_end'];
}
