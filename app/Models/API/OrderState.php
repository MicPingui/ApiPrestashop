<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_state
 * @property boolean $invoice
 * @property boolean $send_email
 * @property string $module_name
 * @property string $color
 * @property boolean $unremovable
 * @property boolean $hidden
 * @property boolean $logable
 * @property boolean $delivery
 * @property boolean $shipped
 * @property boolean $paid
 * @property boolean $pdf_invoice
 * @property boolean $pdf_delivery
 * @property boolean $deleted
 */
class OrderState extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_state';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_state';

    /**
     * @var array
     */
    protected $fillable = ['invoice', 'send_email', 'module_name', 'color', 'unremovable', 'hidden', 'logable', 'delivery', 'shipped', 'paid', 'pdf_invoice', 'pdf_delivery', 'deleted'];
}
