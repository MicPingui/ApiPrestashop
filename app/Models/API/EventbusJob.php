<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $job_id
 * @property string $created_at
 */
class EventbusJob extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_eventbus_job';

    /**
     * @var array
     */
    protected $fillable = ['job_id', 'created_at'];
}
