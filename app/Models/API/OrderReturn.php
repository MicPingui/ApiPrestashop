<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_return
 * @property int $id_customer
 * @property int $id_order
 * @property boolean $state
 * @property string $question
 * @property string $date_add
 * @property string $date_upd
 */
class OrderReturn extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_return';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_return';

    /**
     * @var array
     */
    protected $fillable = ['id_customer', 'id_order', 'state', 'question', 'date_add', 'date_upd'];
}
