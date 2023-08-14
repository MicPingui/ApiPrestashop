<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_date_range
 * @property string $time_start
 * @property string $time_end
 */
class DateRange extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_date_range';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_date_range';

    /**
     * @var array
     */
    protected $fillable = ['time_start', 'time_end'];
}
