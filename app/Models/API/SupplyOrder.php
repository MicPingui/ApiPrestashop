<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supply_order
 * @property int $id_supplier
 * @property string $supplier_name
 * @property int $id_lang
 * @property int $id_warehouse
 * @property int $id_supply_order_state
 * @property int $id_currency
 * @property int $id_ref_currency
 * @property string $reference
 * @property string $date_add
 * @property string $date_upd
 * @property string $date_delivery_expected
 * @property float $total_te
 * @property float $total_with_discount_te
 * @property float $total_tax
 * @property float $total_ti
 * @property float $discount_rate
 * @property float $discount_value_te
 * @property boolean $is_template
 */
class SupplyOrder extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supply_order';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_supply_order';

    /**
     * @var array
     */
    protected $fillable = ['id_supplier', 'supplier_name', 'id_lang', 'id_warehouse', 'id_supply_order_state', 'id_currency', 'id_ref_currency', 'reference', 'date_add', 'date_upd', 'date_delivery_expected', 'total_te', 'total_with_discount_te', 'total_tax', 'total_ti', 'discount_rate', 'discount_value_te', 'is_template'];
}
