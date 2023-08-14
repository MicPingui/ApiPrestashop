<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supply_order_history
 * @property int $id_supply_order
 * @property int $id_employee
 * @property string $employee_lastname
 * @property string $employee_firstname
 * @property int $id_state
 * @property string $date_add
 */
class SupplyOrderHistory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supply_order_history';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_supply_order_history';

    /**
     * @var array
     */
    protected $fillable = ['id_supply_order', 'id_employee', 'employee_lastname', 'employee_firstname', 'id_state', 'date_add'];
}
