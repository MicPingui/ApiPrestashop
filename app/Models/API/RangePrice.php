<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_range_price
 * @property int $id_carrier
 * @property float $delimiter1
 * @property float $delimiter2
 */
class RangePrice extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_range_price';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_range_price';

    /**
     * @var array
     */
    protected $fillable = ['id_carrier', 'delimiter1', 'delimiter2'];
}
