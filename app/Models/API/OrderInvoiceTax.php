<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_invoice
 * @property string $type
 * @property int $id_tax
 * @property float $amount
 */
class OrderInvoiceTax extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_invoice_tax';

    /**
     * @var array
     */
    protected $fillable = ['id_order_invoice', 'type', 'id_tax', 'amount'];
}
