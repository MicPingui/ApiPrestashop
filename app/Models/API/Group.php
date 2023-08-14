<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_group
 * @property float $reduction
 * @property boolean $price_display_method
 * @property boolean $show_prices
 * @property string $date_add
 * @property string $date_upd
 */
class Group extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_group';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_group';

    /**
     * @var array
     */
    protected $fillable = ['reduction', 'price_display_method', 'show_prices', 'date_add', 'date_upd'];
}
