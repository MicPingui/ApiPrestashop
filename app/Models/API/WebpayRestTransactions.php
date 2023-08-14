<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $cart_id
 * @property string $order_id
 * @property string $buy_order
 * @property integer $amount
 * @property string $token
 * @property string $session_id
 * @property boolean $status
 * @property string $transbank_response
 * @property string $response_code
 * @property int $currency_id
 * @property string $vci
 * @property string $created_at
 * @property string $commerce_code
 * @property string $child_commerce_code
 * @property string $product
 * @property string $environment
 * @property string $card_number
 */
class WebpayRestTransactions extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_webpay_rest_transactions';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['cart_id', 'order_id', 'buy_order', 'amount', 'token', 'session_id', 'status', 'transbank_response', 'response_code', 'currency_id', 'vci', 'created_at', 'commerce_code', 'child_commerce_code', 'product', 'environment', 'card_number'];
}
