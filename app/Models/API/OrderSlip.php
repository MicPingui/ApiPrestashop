<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_slip
 * @property float $conversion_rate
 * @property int $id_customer
 * @property int $id_order
 * @property float $total_products_tax_excl
 * @property float $total_products_tax_incl
 * @property float $total_shipping_tax_excl
 * @property float $total_shipping_tax_incl
 * @property boolean $shipping_cost
 * @property float $amount
 * @property float $shipping_cost_amount
 * @property boolean $partial
 * @property boolean $order_slip_type
 * @property string $date_add
 * @property string $date_upd
 */
class OrderSlip extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_slip';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_slip';

    /**
     * @var array
     */
    protected $fillable = ['conversion_rate', 'id_customer', 'id_order', 'total_products_tax_excl', 'total_products_tax_incl', 'total_shipping_tax_excl', 'total_shipping_tax_incl', 'shipping_cost', 'amount', 'shipping_cost_amount', 'partial', 'order_slip_type', 'date_add', 'date_upd'];
}
