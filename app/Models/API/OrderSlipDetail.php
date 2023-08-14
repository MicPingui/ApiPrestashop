<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_slip
 * @property int $id_order_detail
 * @property int $product_quantity
 * @property float $unit_price_tax_excl
 * @property float $unit_price_tax_incl
 * @property float $total_price_tax_excl
 * @property float $total_price_tax_incl
 * @property float $amount_tax_excl
 * @property float $amount_tax_incl
 */
class OrderSlipDetail extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_slip_detail';

    /**
     * @var array
     */
    protected $fillable = ['product_quantity', 'unit_price_tax_excl', 'unit_price_tax_incl', 'total_price_tax_excl', 'total_price_tax_incl', 'amount_tax_excl', 'amount_tax_incl'];
}
