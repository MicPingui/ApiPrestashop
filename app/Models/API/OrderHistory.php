<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_history
 * @property int $id_employee
 * @property int $id_order
 * @property int $id_order_state
 * @property string $date_add
 */
class OrderHistory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_history';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_history';

    /**
     * @var array
     */
    protected $fillable = ['id_employee', 'id_order', 'id_order_state', 'date_add'];
}
