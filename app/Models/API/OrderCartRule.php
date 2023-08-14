<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_cart_rule
 * @property int $id_order
 * @property int $id_cart_rule
 * @property int $id_order_invoice
 * @property string $name
 * @property float $value
 * @property float $value_tax_excl
 * @property boolean $free_shipping
 * @property boolean $deleted
 */
class OrderCartRule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_cart_rule';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_order_cart_rule';

    /**
     * @var array
     */
    protected $fillable = ['id_order', 'id_cart_rule', 'id_order_invoice', 'name', 'value', 'value_tax_excl', 'free_shipping', 'deleted'];
}
