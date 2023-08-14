<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_customer_session
 * @property int $id_customer
 * @property string $token
 */
class CustomerSession extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_customer_session';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_customer_session';

    /**
     * @var array
     */
    protected $fillable = ['id_customer', 'token'];
}
