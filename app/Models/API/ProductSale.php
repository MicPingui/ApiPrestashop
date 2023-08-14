<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_product
 * @property int $quantity
 * @property int $sale_nbr
 * @property string $date_upd
 */
class ProductSale extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_product_sale';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_product';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['quantity', 'sale_nbr', 'date_upd'];
}
