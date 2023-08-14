<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $type
 * @property int $id_object
 * @property int $id_shop
 * @property string $lang_iso
 * @property string $created_at
 */
class EventbusIncrementalSync extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ps_eventbus_incremental_sync';

    /**
     * @var array
     */
    protected $fillable = ['created_at'];
}
