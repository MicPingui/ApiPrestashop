<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_advice
 * @property int $id_ps_advice
 * @property int $id_tab
 * @property string $ids_tab
 * @property boolean $validated
 * @property boolean $hide
 * @property string $location
 * @property string $selector
 * @property int $start_day
 * @property int $stop_day
 * @property int $weight
 */
class Advice extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_advice';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_advice';

    /**
     * @var array
     */
    protected $fillable = ['id_ps_advice', 'id_tab', 'ids_tab', 'validated', 'hide', 'location', 'selector', 'start_day', 'stop_day', 'weight'];
}
