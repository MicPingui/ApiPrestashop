<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_webservice_permission
 * @property string $resource
 * @property string $method
 * @property int $id_webservice_account
 */
class WebservicePermission extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_webservice_permission';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_webservice_permission';

    /**
     * @var array
     */
    protected $fillable = ['resource', 'method', 'id_webservice_account'];
}
