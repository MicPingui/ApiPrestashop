<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_connections
 * @property int $id_shop_group
 * @property int $id_shop
 * @property int $id_guest
 * @property int $id_page
 * @property integer $ip_address
 * @property string $date_add
 * @property string $http_referer
 */
class Connections extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_connections';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_connections';

    /**
     * @var array
     */
    protected $fillable = ['id_shop_group', 'id_shop', 'id_guest', 'id_page', 'ip_address', 'date_add', 'http_referer'];
}
