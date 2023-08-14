<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customer_thread
 * @property int $id_shop
 * @property int $id_lang
 * @property int $id_contact
 * @property int $id_customer
 * @property int $id_order
 * @property int $id_product
 * @property string $status
 * @property string $email
 * @property string $token
 * @property string $date_add
 * @property string $date_upd
 */
class CustomerThread extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customer_thread';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_customer_thread';

    /**
     * @var array
     */
    protected $fillable = ['id_shop', 'id_lang', 'id_contact', 'id_customer', 'id_order', 'id_product', 'status', 'email', 'token', 'date_add', 'date_upd'];
}
