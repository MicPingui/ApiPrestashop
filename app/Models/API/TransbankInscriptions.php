<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $token
 * @property string $username
 * @property string $email
 * @property integer $user_id
 * @property string $tbk_token
 * @property integer $order_id
 * @property boolean $pay_after_inscription
 * @property boolean $finished
 * @property string $response_code
 * @property string $authorization_code
 * @property string $card_type
 * @property string $card_number
 * @property string $from
 * @property string $status
 * @property string $environment
 * @property string $commerce_code
 * @property string $transbank_response
 * @property string $created_at
 */
class TransbankInscriptions extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_transbank_inscriptions';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['token', 'username', 'email', 'user_id', 'tbk_token', 'order_id', 'pay_after_inscription', 'finished', 'response_code', 'authorization_code', 'card_type', 'card_number', 'from', 'status', 'environment', 'commerce_code', 'transbank_response', 'created_at'];
}
