<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_log
 * @property boolean $severity
 * @property int $error_code
 * @property string $message
 * @property string $object_type
 * @property int $object_id
 * @property int $id_shop
 * @property int $id_shop_group
 * @property int $id_lang
 * @property boolean $in_all_shops
 * @property int $id_employee
 * @property string $date_add
 * @property string $date_upd
 */
class Log extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_log';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_log';

    /**
     * @var array
     */
    protected $fillable = ['severity', 'error_code', 'message', 'object_type', 'object_id', 'id_shop', 'id_shop_group', 'id_lang', 'in_all_shops', 'id_employee', 'date_add', 'date_upd'];
}
