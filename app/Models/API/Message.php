<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_message
 * @property int $id_cart
 * @property int $id_customer
 * @property int $id_employee
 * @property int $id_order
 * @property string $message
 * @property boolean $private
 * @property string $date_add
 */
class Message extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_message';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_message';

    /**
     * @var array
     */
    protected $fillable = ['id_cart', 'id_customer', 'id_employee', 'id_order', 'message', 'private', 'date_add'];
}
