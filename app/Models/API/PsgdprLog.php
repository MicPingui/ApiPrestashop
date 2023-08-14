<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_gdpr_log
 * @property int $id_customer
 * @property int $id_guest
 * @property string $client_name
 * @property int $id_module
 * @property int $request_type
 * @property string $date_add
 * @property string $date_upd
 */
class PsgdprLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_psgdpr_log';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_gdpr_log';

    /**
     * @var array
     */
    protected $fillable = ['id_customer', 'id_guest', 'client_name', 'id_module', 'request_type', 'date_add', 'date_upd'];
}
