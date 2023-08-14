<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_order_detail
 * @property int $id_tax
 * @property float $unit_amount
 * @property float $total_amount
 */
class OrderDetailTax extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_order_detail_tax';

    /**
     * @var array
     */
    protected $fillable = ['id_order_detail', 'id_tax', 'unit_amount', 'total_amount'];
}
