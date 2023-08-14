<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_supply_order_state
 * @property int $id_lang
 * @property string $name
 */
class SupplyOrderStateLang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_supply_order_state_lang';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
