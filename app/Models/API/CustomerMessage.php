<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customer_message
 * @property int $id_customer_thread
 * @property int $id_employee
 * @property string $message
 * @property string $file_name
 * @property string $ip_address
 * @property string $user_agent
 * @property string $date_add
 * @property string $date_upd
 * @property boolean $private
 * @property boolean $read
 */
class CustomerMessage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customer_message';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_customer_message';

    /**
     * @var array
     */
    protected $fillable = ['id_customer_thread', 'id_employee', 'message', 'file_name', 'ip_address', 'user_agent', 'date_add', 'date_upd', 'private', 'read'];
}
