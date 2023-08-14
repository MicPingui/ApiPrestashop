<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_invoice
 * @property int $id_order
 * @property int $number
 * @property int $delivery_number
 * @property string $delivery_date
 * @property float $total_discount_tax_excl
 * @property float $total_discount_tax_incl
 * @property float $total_paid_tax_excl
 * @property float $total_paid_tax_incl
 * @property float $total_products
 * @property float $total_products_wt
 * @property float $total_shipping_tax_excl
 * @property float $total_shipping_tax_incl
 * @property int $shipping_tax_computation_method
 * @property float $total_wrapping_tax_excl
 * @property float $total_wrapping_tax_incl
 * @property string $shop_address
 * @property string $note
 * @property string $date_add
 */
class OrderInvoice extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_invoice';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_invoice';

    /**
     * @var array
     */
    protected $fillable = ['id_order', 'number', 'delivery_number', 'delivery_date', 'total_discount_tax_excl', 'total_discount_tax_incl', 'total_paid_tax_excl', 'total_paid_tax_incl', 'total_products', 'total_products_wt', 'total_shipping_tax_excl', 'total_shipping_tax_incl', 'shipping_tax_computation_method', 'total_wrapping_tax_excl', 'total_wrapping_tax_incl', 'shop_address', 'note', 'date_add'];
}
