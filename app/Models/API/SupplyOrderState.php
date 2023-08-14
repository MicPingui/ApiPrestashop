<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supply_order_state
 * @property boolean $delivery_note
 * @property boolean $editable
 * @property boolean $receipt_state
 * @property boolean $pending_receipt
 * @property boolean $enclosed
 * @property string $color
 */
class SupplyOrderState extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supply_order_state';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_supply_order_state';

    /**
     * @var array
     */
    protected $fillable = ['delivery_note', 'editable', 'receipt_state', 'pending_receipt', 'enclosed', 'color'];
}
