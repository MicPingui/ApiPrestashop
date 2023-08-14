<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supplier
 * @property int $id_shop
 */
class SupplierShop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supplier_shop';

    /**
     * @var array
     */
    protected $fillable = [];
}
