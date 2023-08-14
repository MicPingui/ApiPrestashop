<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_connections_source
 * @property int $id_connections
 * @property string $http_referer
 * @property string $request_uri
 * @property string $keywords
 * @property string $date_add
 */
class ConnectionsSource extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_connections_source';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_connections_source';

    /**
     * @var array
     */
    protected $fillable = ['id_connections', 'http_referer', 'request_uri', 'keywords', 'date_add'];
}
