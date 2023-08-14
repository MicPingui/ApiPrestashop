<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_carrier
 * @property int $id_order
 * @property int $id_carrier
 * @property int $id_order_invoice
 * @property float $weight
 * @property float $shipping_cost_tax_excl
 * @property float $shipping_cost_tax_incl
 * @property string $tracking_number
 * @property string $date_add
 */
class OrderCarrier extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_carrier';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_carrier';

    /**
     * @var array
     */
    protected $fillable = ['id_order', 'id_carrier', 'id_order_invoice', 'weight', 'shipping_cost_tax_excl', 'shipping_cost_tax_incl', 'tracking_number', 'date_add'];
}
