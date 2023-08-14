<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_invoice
 * @property int $id_order_payment
 * @property int $id_order
 */
class OrderInvoicePayment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_invoice_payment';

    /**
     * @var array
     */
    protected $fillable = ['id_order'];
}
