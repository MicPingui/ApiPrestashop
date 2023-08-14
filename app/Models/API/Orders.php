<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order
 * @property string $reference
 * @property int $id_shop_group
 * @property int $id_shop
 * @property int $id_carrier
 * @property int $id_lang
 * @property int $id_customer
 * @property int $id_cart
 * @property int $id_currency
 * @property int $id_address_delivery
 * @property int $id_address_invoice
 * @property int $current_state
 * @property string $secure_key
 * @property string $payment
 * @property float $conversion_rate
 * @property string $module
 * @property boolean $recyclable
 * @property boolean $gift
 * @property string $gift_message
 * @property boolean $mobile_theme
 * @property string $shipping_number
 * @property float $total_discounts
 * @property float $total_discounts_tax_incl
 * @property float $total_discounts_tax_excl
 * @property float $total_paid
 * @property float $total_paid_tax_incl
 * @property float $total_paid_tax_excl
 * @property float $total_paid_real
 * @property float $total_products
 * @property float $total_products_wt
 * @property float $total_shipping
 * @property float $total_shipping_tax_incl
 * @property float $total_shipping_tax_excl
 * @property float $carrier_tax_rate
 * @property float $total_wrapping
 * @property float $total_wrapping_tax_incl
 * @property float $total_wrapping_tax_excl
 * @property boolean $round_mode
 * @property boolean $round_type
 * @property int $invoice_number
 * @property int $delivery_number
 * @property string $invoice_date
 * @property string $delivery_date
 * @property int $valid
 * @property string $date_add
 * @property string $date_upd
 * @property string $note
 */
class Orders extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ps_orders';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_order';

    /**
     * @var array
     */
    protected $fillable = ['reference', 'id_shop_group', 'id_shop', 'id_carrier', 'id_lang', 'id_customer', 'id_cart', 'id_currency', 'id_address_delivery', 'id_address_invoice', 'current_state', 'secure_key', 'payment', 'conversion_rate', 'module', 'recyclable', 'gift', 'gift_message', 'mobile_theme', 'shipping_number', 'total_discounts', 'total_discounts_tax_incl', 'total_discounts_tax_excl', 'total_paid', 'total_paid_tax_incl', 'total_paid_tax_excl', 'total_paid_real', 'total_products', 'total_products_wt', 'total_shipping', 'total_shipping_tax_incl', 'total_shipping_tax_excl', 'carrier_tax_rate', 'total_wrapping', 'total_wrapping_tax_incl', 'total_wrapping_tax_excl', 'round_mode', 'round_type', 'invoice_number', 'delivery_number', 'invoice_date', 'delivery_date', 'valid', 'date_add', 'date_upd', 'note'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(){
        return $this->belongsTo('App\Models\API\Customer', 'id_customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function webpay(){
        return $this->belongsTo('App\Models\API\WebpayRestTransactions', 'id_order','order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_details(){
        return $this->HasMany('App\Models\API\OrderDetail', 'id_order','id_order');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state(){
        return $this->belongsTo('App\Models\API\OrderStateLang', 'current_state','id_order_state');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses(){
        return $this->HasMany('App\Models\API\Address', 'id_customer','id_customer');
    }



}
