<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_range_weight
 * @property int $id_carrier
 * @property float $delimiter1
 * @property float $delimiter2
 */
class RangeWeight extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_range_weight';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_range_weight';

    /**
     * @var array
     */
    protected $fillable = ['id_carrier', 'delimiter1', 'delimiter2'];
}
