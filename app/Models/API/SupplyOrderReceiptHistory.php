<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supply_order_receipt_history
 * @property int $id_supply_order_detail
 * @property int $id_employee
 * @property string $employee_lastname
 * @property string $employee_firstname
 * @property int $id_supply_order_state
 * @property int $quantity
 * @property string $date_add
 */
class SupplyOrderReceiptHistory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supply_order_receipt_history';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_supply_order_receipt_history';

    /**
     * @var array
     */
    protected $fillable = ['id_supply_order_detail', 'id_employee', 'employee_lastname', 'employee_firstname', 'id_supply_order_state', 'quantity', 'date_add'];
}
