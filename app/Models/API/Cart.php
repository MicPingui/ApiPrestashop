<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_cart
 * @property int $id_shop_group
 * @property int $id_shop
 * @property int $id_carrier
 * @property string $delivery_option
 * @property int $id_lang
 * @property int $id_address_delivery
 * @property int $id_address_invoice
 * @property int $id_currency
 * @property int $id_customer
 * @property int $id_guest
 * @property string $secure_key
 * @property boolean $recyclable
 * @property boolean $gift
 * @property string $gift_message
 * @property boolean $mobile_theme
 * @property boolean $allow_seperated_package
 * @property string $date_add
 * @property string $date_upd
 * @property string $checkout_session_data
 */
class Cart extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_cart';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_cart';

    /**
     * @var array
     */
    protected $fillable = ['id_shop_group', 'id_shop', 'id_carrier', 'delivery_option', 'id_lang', 'id_address_delivery', 'id_address_invoice', 'id_currency', 'id_customer', 'id_guest', 'secure_key', 'recyclable', 'gift', 'gift_message', 'mobile_theme', 'allow_seperated_package', 'date_add', 'date_upd', 'checkout_session_data'];
}
