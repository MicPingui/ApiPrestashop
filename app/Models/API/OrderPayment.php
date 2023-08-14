<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_payment
 * @property string $order_reference
 * @property int $id_currency
 * @property float $amount
 * @property string $payment_method
 * @property float $conversion_rate
 * @property string $transaction_id
 * @property string $card_number
 * @property string $card_brand
 * @property string $card_expiration
 * @property string $card_holder
 * @property string $date_add
 */
class OrderPayment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_payment';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_payment';

    /**
     * @var array
     */
    protected $fillable = ['order_reference', 'id_currency', 'amount', 'payment_method', 'conversion_rate', 'transaction_id', 'card_number', 'card_brand', 'card_expiration', 'card_holder', 'date_add'];
}
