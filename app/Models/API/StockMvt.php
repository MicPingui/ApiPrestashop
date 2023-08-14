<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_stock_mvt
 * @property int $id_stock
 * @property int $id_order
 * @property int $id_supply_order
 * @property int $id_stock_mvt_reason
 * @property int $id_employee
 * @property string $employee_lastname
 * @property string $employee_firstname
 * @property int $physical_quantity
 * @property string $date_add
 * @property integer $sign
 * @property float $price_te
 * @property float $last_wa
 * @property float $current_wa
 * @property integer $referer
 */
class StockMvt extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_stock_mvt';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_stock_mvt';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_stock', 'id_order', 'id_supply_order', 'id_stock_mvt_reason', 'id_employee', 'employee_lastname', 'employee_firstname', 'physical_quantity', 'date_add', 'sign', 'price_te', 'last_wa', 'current_wa', 'referer'];
}
